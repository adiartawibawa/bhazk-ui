<?php

use Illuminate\Support\Facades\Route;

Route::prefix(config('bhazk-ui.docs.route_prefix', 'docs'))
    ->middleware(config('bhazk-ui.docs.middleware', ['web']))
    ->name('docs.')
    ->group(function () {

        // --- Actions ---
        Route::view('actions/button', 'bhazk-ui::docs.actions.button')->name('actions.button');
        Route::view('actions/dropdown', 'bhazk-ui::docs.actions.dropdown')->name('actions.dropdown');
        Route::view('actions/modal', 'bhazk-ui::docs.actions.modal')->name('actions.modal');
        Route::view('actions/swap', 'bhazk-ui::docs.actions.swap')->name('actions.swap');
        Route::view('actions/fab', 'bhazk-ui::docs.actions.fab')->name('actions.fab');

        // --- Data Display ---
        Route::view('data-display/badge', 'bhazk-ui::docs.data-display.badge')->name('data-display.badge');
        Route::view('data-display/avatar', 'bhazk-ui::docs.data-display.avatar')->name('data-display.avatar');
        Route::view('data-display/card', 'bhazk-ui::docs.data-display.card')->name('data-display.card');
        Route::view('data-display/collapse', 'bhazk-ui::docs.data-display.collapse')->name('data-display.collapse');
        Route::view('data-display/accordion', 'bhazk-ui::docs.data-display.accordion')->name('data-display.accordion');
        Route::view('data-display/table', 'bhazk-ui::docs.data-display.table')->name('data-display.table');
        Route::view('data-display/stat', 'bhazk-ui::docs.data-display.stat')->name('data-display.stat');
        Route::view('data-display/list', 'bhazk-ui::docs.data-display.list')->name('data-display.list');
        Route::view('data-display/kbd', 'bhazk-ui::docs.data-display.kbd')->name('data-display.kbd');
        Route::view('data-display/countdown', 'bhazk-ui::docs.data-display.countdown')->name('data-display.countdown');
        Route::view('data-display/diff', 'bhazk-ui::docs.data-display.diff')->name('data-display.diff');
        Route::view('data-display/status', 'bhazk-ui::docs.data-display.status')->name('data-display.status');
        Route::view('data-display/aura', 'bhazk-ui::docs.data-display.aura')->name('data-display.aura');
        Route::view('data-display/carousel', 'bhazk-ui::docs.data-display.carousel')->name('data-display.carousel');
        Route::view('data-display/chat', 'bhazk-ui::docs.data-display.chat')->name('data-display.chat');
        Route::view('data-display/timeline', 'bhazk-ui::docs.data-display.timeline')->name('data-display.timeline');
        Route::view('data-display/hover-3d', 'bhazk-ui::docs.data-display.hover-3d')->name('data-display.hover-3d');
        Route::view('data-display/hover-gallery', 'bhazk-ui::docs.data-display.hover-gallery')->name('data-display.hover-gallery');
        Route::view('data-display/text-rotate', 'bhazk-ui::docs.data-display.text-rotate')->name('data-display.text-rotate');

        // --- Navigations ---
        Route::view('navigation/breadcrumbs', 'bhazk-ui::docs.navigation.breadcrumbs')->name('navigation.breadcrumbs');
        Route::view('navigation/menu', 'bhazk-ui::docs.navigation.menu')->name('navigation.menu');
        Route::view('navigation/link', 'bhazk-ui::docs.navigation.link')->name('navigation.link');
        Route::view('navigation/navbar', 'bhazk-ui::docs.navigation.navbar')->name('navigation.navbar');
        Route::view('navigation/tab', 'bhazk-ui::docs.navigation.tab')->name('navigation.tab');
        Route::view('navigation/pagination', 'bhazk-ui::docs.navigation.pagination')->name('navigation.pagination');
        Route::view('navigation/step', 'bhazk-ui::docs.navigation.step')->name('navigation.step');
        Route::view('navigation/dock', 'bhazk-ui::docs.navigation.dock')->name('navigation.dock');
        Route::view('navigation/megamenu', 'bhazk-ui::docs.navigation.megamenu')->name('navigation.megamenu');

        // --- Inputs ---
        Route::view('input/input-field', 'bhazk-ui::docs.input.input-field')->name('input.input-field');
        Route::view('input/textarea', 'bhazk-ui::docs.input.textarea')->name('input.textarea');
        Route::view('input/select', 'bhazk-ui::docs.input.select')->name('input.select');
        Route::view('input/checkbox', 'bhazk-ui::docs.input.checkbox')->name('input.checkbox');
        Route::view('input/toggle', 'bhazk-ui::docs.input.toggle')->name('input.toggle');
        Route::view('input/radio', 'bhazk-ui::docs.input.radio')->name('input.radio');
        Route::view('input/range', 'bhazk-ui::docs.input.range')->name('input.range');
        Route::view('input/rating', 'bhazk-ui::docs.input.rating')->name('input.rating');
        Route::view('input/fieldset', 'bhazk-ui::docs.input.fieldset')->name('input.fieldset');
        Route::view('input/calendar', 'bhazk-ui::docs.input.calendar')->name('input.calendar');
        Route::view('input/filter', 'bhazk-ui::docs.input.filter')->name('input.filter');
        Route::view('input/otp', 'bhazk-ui::docs.input.otp')->name('input.otp');
        Route::view('input/validator', 'bhazk-ui::docs.input.validator')->name('input.validator');
    });
