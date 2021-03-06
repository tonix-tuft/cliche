module.exports = {
  parser: "babel-eslint",
  env: {
    browser: true,
    es6: true,
  },
  extends: ["eslint:recommended", "standard", "standard-react"],
  globals: {
    Atomics: "readonly",
    SharedArrayBuffer: "readonly",
  },
  parserOptions: {
    ecmaFeatures: {
      jsx: true,
    },
    ecmaVersion: 2018,
    sourceType: "module",
  },
  plugins: ["react", "react-hooks"],
  rules: {},
  overrides: [],
};

module.exports = {
  //parser: "babel-eslint",
  parser: "@typescript-eslint/parser",
  env: {
    browser: true,
    es6: true,
  },
  settings: {
    react: {
      version: "detect",
    },
  },
  extends: [
    "eslint:recommended",
    "plugin:react/recommended",
    "plugin:@typescript-eslint/eslint-recommended",
    "plugin:@typescript-eslint/recommended",
  ],
  globals: {
    Atomics: "readonly",
    SharedArrayBuffer: "readonly",
  },
  parserOptions: {
    ecmaFeatures: {
      jsx: true,
    },
    ecmaVersion: 2018,
    sourceType: "module",
  },
  plugins: ["react", "@typescript-eslint", "react-hooks"],
  rules: {
    "jsx-quotes": "off",
    "no-void": 0,
    quotes: "off",
    semi: "off",
    "space-before-function-paren": "off",
    "no-unused-vars": ["error", { ignoreRestSiblings: true }],
    "no-console": "error",
    "standard/computed-property-even-spacing": "off",
    "react/prop-types": 0,
    "react/jsx-uses-react": "error",
    "react-hooks/rules-of-hooks": "error",
    "react-hooks/exhaustive-deps": "warn",
    "@typescript-eslint/explicit-function-return-type": "off",
    "@typescript-eslint/no-unused-vars": "off",
    "comma-dangle": "off",
    indent: [
      "error",
      2,
      {
        ignoredNodes: ["TemplateLiteral"],
      },
    ],
    "template-curly-spacing": ["off"],
  },
  overrides: [
    {
      // Enable the rule specifically for TypeScript files
      files: ["*.ts", "*.tsx"],
      rules: {
        //"@typescript-eslint/explicit-function-return-type": ["error"],
        "@typescript-eslint/explicit-function-return-type": "off",
        "@typescript-eslint/no-unused-vars": ["error"],
        "react-hooks/rules-of-hooks": "error", // Checks rules of Hooks
        "react-hooks/exhaustive-deps": "warn", // Checks effect dependencies
      },
    },
  ],
};
