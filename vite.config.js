import { globSync } from "glob";
import { resolve } from "path";
import commonjs from "vite-plugin-commonjs";
import kirby from "vite-plugin-kirby";

const input = globSync(["src/index.{js,scss}", "src/templates/*.{js,scss}"]).map(
  (path) => resolve(process.cwd(), path)
);

export default ({ mode }) => ({
  root: "src",
  base: mode === "development" ? "/" : "./",

  build: {
    outDir: resolve(process.cwd(), "public/dist"),
    emptyOutDir: true,
    rollupOptions: {
      input
    },
    commonjsOptions: { transformMixedEsModules: true }
  },

  plugins: [
    kirby(),
    commonjs()
  ],
});
