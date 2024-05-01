import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/sb-admin-2.css',
                'resources/css/sb-admin-2.min.css'
            ],
            refresh: true,
        }),
    ],
});