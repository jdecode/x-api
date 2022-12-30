import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    "server": {
        "host": "0.0.0.0",
        "watch": {
            "ignored": [
                "!**/vendor/**"
            ]
        },
        "port": 1010
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
