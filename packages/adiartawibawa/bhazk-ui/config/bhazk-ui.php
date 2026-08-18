<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dokumentasi Interaktif
    |--------------------------------------------------------------------------
    | Mengatur apakah halaman docs/showcase komponen di-load sebagai route.
    | Disarankan hanya aktif di environment local/dev.
    */
    'docs' => [
        'enabled' => env('BHAZK_UI_DOCS_ENABLED', true),
        'route_prefix' => env('BHAZK_UI_DOCS_PREFIX', 'docs'),
        'middleware' => ['web'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Props
    |--------------------------------------------------------------------------
    | Nilai fallback default yang dipakai lintas komponen ketika prop
    | size/variant tidak diisi oleh consumer.
    */
    'defaults' => [
        'size' => 'md',
        'variant' => 'primary',
    ],

    'icons' => [
        'default' => 'lucide', // set yang dipakai jika prop 'name' tanpa prefix "set:"
        'sets' => [
            // Consumer mengisi folder ini
            'lucide' => resource_path('svg/lucide'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Kategori Komponen
    |--------------------------------------------------------------------------
    | Dipakai untuk membangun sidebar navigasi di halaman dokumentasi secara
    | dinamis. Tambahkan entry baru di sini setiap kali komponen baru selesai.
    */
    'categories' => [
        'actions' => [
            'label' => 'Actions',
            'components' => [
                'button',
                'dropdown',
                'modal',
                'swap',
                'fab',
            ],
        ],
        'data-display' => [
            'label' => 'Data Display',
            'components' => [
                'badge',
                'avatar',
                'card',
                'collapse',
                'accordion',
                'table',
                'stat',
                'list',
                'kbd',
                'countdown',
                'diff',
                'status',
                'aura',
                'carousel',
                'chat',
                'timeline',
                'hover-3d',
                'hover-gallery',
                'text-rotate',
            ],
        ],
        'navigation' => [
            'label' => 'Navigation',
            'components' => [
                'breadcrumbs',
                'menu',
                'link',
                'navbar',
                'tab',
                'pagination',
                'step',
                'dock',
                'megamenu',
            ],
        ],
        'input' => [
            'label' => 'Input',
            'components' => [
                'input-field',
                'textarea',
                'select',
                'checkbox',
                'toggle',
                'radio',
                'range',
                'rating',
                'fieldset',
                'calendar',
                'filter',
                'otp',
                'validator',
                'file-input',
            ],
        ],
        'feedback' => [
            'label' => 'Feedback',
            'components' => [
                'alert',
                'loading',
                'progress',
                'radial-progress',
                'skeleton',
                'toast',
                'tooltip',
            ],
        ],
        'layout' => [
            'label' => 'Layout',
            'components' => [
                'divider',
                'drawer',
                'footer',
                'hero',
                'indicator',
                'join',
                'mask',
                'stack',
            ],
        ],
        'mockups' => [
            'label' => 'Mockups',
            'components' => [
                'browser',
                'code',
                'phone',
                'window',
            ],
        ],
        'utilities' => [
            'label' => 'Utilities',
            'components' => [
                'icon',
            ],
        ],
    ],

];
