import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        https: true,
        hmr: {
            host: 'bug-free-space-palm-tree-r4p9gg7jx7rpf5j5v-5173.app.github.dev',
            protocol: 'wss',
        },
        cors: {
            origin: '*',
            methods: ['GET', 'POST'],
            allowedHeaders: ['Content-Type'],
        },
    },
    base: '/', // Указываем базовый путь
});