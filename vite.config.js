import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: "./",
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/check.css',
                'resources/css/complete.css',
                'resources/css/confirms.css',
                'resources/css/hotels.css',
                'resources/css/plans.css',
                'resources/css/reservations.css',
                'resources/js/app.js',
                'resources/js/reservations.js',
            ],
            refresh: true,
        }),
    ],
});
