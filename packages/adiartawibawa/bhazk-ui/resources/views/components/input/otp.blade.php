@props([
    'length' => 4, // jumlah digit, otomatis menyesuaikan maxlength/pattern
    'variant' => null, // neutral, primary, secondary, accent, info, success, warning, error
    'size' => null, // xs, sm, md, lg, xl
])

@php
    $variantClass = match ($variant) {
        'neutral' => 'otp-neutral',
        'primary' => 'otp-primary',
        'secondary' => 'otp-secondary',
        'accent' => 'otp-accent',
        'info' => 'otp-info',
        'success' => 'otp-success',
        'warning' => 'otp-warning',
        'error' => 'otp-error',
        null => null,
        default => 'otp-' . \Illuminate\Support\Str::slug($variant),
    };

    $sizeClass = match ($size) {
        'xs' => 'otp-xs',
        'sm' => 'otp-sm',
        'md' => 'otp-md',
        'lg' => 'otp-lg',
        'xl' => 'otp-xl',
        default => null,
    };

    // Dibangun di PHP dulu supaya kurung kurawal literal ([0-9]{4}) tidak
    // tertukar dengan sintaks {{ }} milik Blade.
    $patternAttr = '[0-9]{' . $length . '}';
@endphp

<label {{ $attributes->class(['otp', $variantClass, $sizeClass]) }}>
    @for ($i = 0; $i < $length; $i++)
        <span></span>
    @endfor
    <input type="text" autocomplete="one-time-code" inputmode="numeric" maxlength="{{ $length }}"
        pattern="{{ $patternAttr }}" required />
</label>
