'use strict'

module.exports = {
  parser: 'vue-eslint-parser',
  parserOptions: {
    ecmaVersion: 2018,
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true
    }
  },
  env: {
    browser: true,
    es6: true
  },
  plugins: ['gridsome'],
  extends: [
    'plugin:vue/essential',
    'plugin:prettier/recommended',
    'plugin:gridsome/recommended'
  ],
  rules: {
    'gridsome/format-query-block': 'warn',
    'gridsome/require-g-image-src': 'error',
    'gridsome/require-g-link-to': 'warn',
    'no-console': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off'
  }
}
