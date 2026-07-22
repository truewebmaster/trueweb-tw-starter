import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  server: {
    host: true, // Доступен из LocalWP / Docker / WSL
    port: 5173,
    strictPort: true,

    cors: true,
  },

  resolve: {
    alias: {
      "@scss": resolve(__dirname, "assets/scss"),
      "@js": resolve(__dirname, "assets/js"),
      "@img": resolve(__dirname, "assets/images"),
      "@icons": resolve(__dirname, "assets/icons"),
      "@fonts": resolve(__dirname, "assets/fonts"),
    },
  },

  build: {
    outDir: "build",

    rollupOptions: {
      input: {
        main: resolve(__dirname, "assets/js/main.js"),
        style: resolve(__dirname, "assets/scss/main.scss"),
      },

      output: {
        entryFileNames: "js/main.js",

        assetFileNames: (assetInfo) => {
          if (assetInfo.name?.endsWith(".css")) {
            return "css/main.css";
          }

          return "assets/[name][extname]";
        },
      },
    },
  },
});
