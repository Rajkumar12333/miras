import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.js', 'resources/css/app.css'],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      'bootstrap-datepicker': 'bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
    },
  },
  build: {
    rollupOptions: {
      external: ['bootstrap-datepicker'],
    },
  },
});
