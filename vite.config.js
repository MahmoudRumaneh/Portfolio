import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig((configEnv = { mode: 'production' }) => {
    const mode = configEnv.mode || process.env.NODE_ENV || 'production';

    return {
        mode,
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
        build: {
            outDir: 'dist',
            emptyOutDir: true,
        },
    };
});
