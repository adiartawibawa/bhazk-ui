# Bhazk UI

Modular UI Component Library with DaisyUI — dibangun untuk Laravel 13,
DaisyUI 5, AlpineJS, dan Livewire.

## Instalasi

```bash
composer require adiartawibawa/bhazk-ui
```

Package auto-discover sendiri lewat Laravel package discovery.

## Penggunaan

Komponen langsung tersedia tanpa prefix namespace:

```blade
<x-actions.button variant="primary" size="lg">
    Simpan
</x-actions.button>
```

## Dokumentasi Interaktif

Jalankan `php artisan serve`, lalu buka: http://localhost:8000/docs/actions/button

Docs hanya aktif di environment `local` (bisa diubah lewat `BHAZK_UI_DOCS_ENABLED` di `.env`).

## Publish (opsional)

```bash
php artisan vendor:publish --tag=bhazk-ui-config
php artisan vendor:publish --tag=bhazk-ui-components
```

## Struktur Kategori

| Kategori       | Contoh Komponen                          |
| -------------- | ---------------------------------------- |
| `actions`      | button, dropdown, modal, swap, fab       |
| `data-display` | accordion, avatar, badge, card, table    |
| `navigation`   | breadcrumbs, navbar, menu, tabs, steps   |
| `input`        | checkbox, select, textarea, toggle, otp  |
| `feedback`     | alert, loading, progress, toast, tooltip |
| `layout`       | divider, drawer, footer, hero, join      |
| `mockups`      | browser, code, phone, window             |
