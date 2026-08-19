<?php

namespace AdiArtaWibawa\BhazkUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BhazkUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bhazk-ui.php', 'bhazk-ui');
    }

    public function boot(): void
    {
        $viewsPath = __DIR__.'/../resources/views';

        // Namespace 'bhazk-ui' → dipakai untuk resolve internal, misal @extends('bhazk-ui::docs.layouts.base')
        $this->loadViewsFrom($viewsPath, 'bhazk-ui');

        /**
         * Daftarkan folder components sebagai ANONYMOUS COMPONENT PATH tanpa prefix,
         * supaya di aplikasi Laravel utama tetap bisa dipanggil persis seperti
         * komponen lokal biasa: <x-actions.button />, <x-layouts.docs />, dst.
         */
        Blade::anonymousComponentPath($viewsPath.'/components');

        // Halaman dokumentasi interaktif hanya di-load jika diaktifkan
        if (config('bhazk-ui.docs.enabled', true) && $this->app->environment('local')) {
            $this->loadRoutesFrom(__DIR__.'/../routes/docs.php');
        }

        if ($this->app->runningInConsole()) {
            $this->registerPublishing($viewsPath);
        }

        // Set icon bawaan package — selalu tersedia, terpisah dari icon set
        // milik consumer supaya tidak pernah bentrok nama.
        config(['bhazk-ui.icons.sets.bhazk-ui-demo' => __DIR__.'/../resources/svg/demo']);
    }

    protected function registerPublishing(string $viewsPath): void
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../config/bhazk-ui.php' => config_path('bhazk-ui.php'),
        ], 'bhazk-ui-config');

        // Publish seluruh komponen ke resources/views/components milik project
        // (opsional — dipakai kalau developer ingin fork/edit komponen secara lokal)
        $this->publishes([
            $viewsPath.'/components' => resource_path('views/components'),
        ], 'bhazk-ui-components');

        // Publish halaman dokumentasi
        $this->publishes([
            $viewsPath.'/docs' => resource_path('views/vendor/bhazk-ui/docs'),
        ], 'bhazk-ui-docs');

        // Publish dist JS/CSS terkompilasi ke public/, siap dipakai
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/bhazk-ui'),
        ], 'bhazk-ui-assets');
    }
}
