import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import './resources/css/test.css'
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/test.css',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
