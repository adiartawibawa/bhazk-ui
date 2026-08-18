<?php

namespace AdiArtaWibawa\BhazkUi\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\View\ComponentAttributeBag;

class IconResolver
{
    /** @var array<string, string|null> Cache in-memory per request */
    protected static array $memoryCache = [];

    public static function resolve(string $rawName, ?string $set = null): ?string
    {
        [$set, $name] = static::parseName($rawName, $set);
        $cacheKey = $set.':'.$name;

        if (array_key_exists($cacheKey, static::$memoryCache)) {
            return static::$memoryCache[$cacheKey];
        }

        $directory = config("bhazk-ui.icons.sets.{$set}");

        if (! $directory) {
            return static::$memoryCache[$cacheKey] = null;
        }

        // Sanitasi wajib — cegah path traversal (mis. name="../../.env")
        $safeName = basename($name);
        $path = rtrim($directory, '/').'/'.$safeName.'.svg';

        if (! is_file($path)) {
            return static::$memoryCache[$cacheKey] = null;
        }

        // Cache lintas-request di production; selalu baca ulang di local
        // supaya perubahan file SVG langsung terlihat saat development.
        if (app()->environment('local')) {
            return static::$memoryCache[$cacheKey] = file_get_contents($path);
        }

        return static::$memoryCache[$cacheKey] = Cache::rememberForever(
            "bhazk-ui.icon.{$cacheKey}",
            fn () => file_get_contents($path)
        );
    }

    /**
     * Suntikkan atribut (class, dst) ke tag <svg> root — MENGGABUNGKAN class
     * yang sudah ada di file SVG asli (mis. stroke-width bawaan Lucide),
     * bukan menimpanya.
     */
    public static function render(string $svgContent, ComponentAttributeBag $attributes): string
    {
        $dom = new \DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadXML($svgContent);
        libxml_clear_errors();

        $svgEl = $dom->documentElement;

        if (! $svgEl) {
            return $svgContent; // fallback: kembalikan mentah jika parsing gagal
        }

        $existingClass = $svgEl->getAttribute('class');
        $passedClass = (string) $attributes->get('class', '');
        $mergedClass = trim($existingClass.' '.$passedClass);

        if ($mergedClass !== '') {
            $svgEl->setAttribute('class', $mergedClass);
        }

        foreach ($attributes->except(['class']) as $key => $value) {
            if ($value === true) {
                $svgEl->setAttribute($key, $key);
            } elseif ($value !== false && $value !== null) {
                $svgEl->setAttribute($key, (string) $value);
            }
        }

        return $dom->saveXML($svgEl);
    }

    protected static function parseName(string $rawName, ?string $set): array
    {
        if (str_contains($rawName, ':')) {
            [$set, $rawName] = explode(':', $rawName, 2);
        }

        return [$set ?? config('bhazk-ui.icons.default', 'lucide'), $rawName];
    }
}
