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
            'components' => [],
        ],
        'layout' => [
            'label' => 'Layout',
            'components' => [],
        ],
        'mockups' => [
            'label' => 'Mockups',
            'components' => [],
        ],
    ],

];
