import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/bootstrap.css', 'resources/css/estilo.css', 'resources/css/registro.css', 'resources/js/bootstrap.bundle.js',
                    'resources/js/bootstrap.js','resources/js/registro.js'
        ],
            refresh: true,
        }),
    ],
});
