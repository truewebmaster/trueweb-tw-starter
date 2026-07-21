import postcssPxToRem from "postcss-pxtorem";
import postcssPresetEnv from "postcss-preset-env";

export default {
  plugins: [
    postcssPxToRem({
      rootValue: 16,
      propList: ["*"],
      mediaQuery: true,
    }),

    postcssPresetEnv(),
  ],
};
