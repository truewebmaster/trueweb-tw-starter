import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  build: {
    outDir: "build",

    rollupOptions: {
      input: {
        main: resolve(__dirname, "assets/scss/main.scss"),
      },

      output: {
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
