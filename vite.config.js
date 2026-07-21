import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
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
