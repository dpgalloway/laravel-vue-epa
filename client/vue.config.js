const path = require('path');

module.exports = {
  runtimeCompiler: true,
  lintOnSave: false,
  publicPath: process.env.NODE_ENV === 'production' ? 'client/dist/' : '/',
  css: {
    loaderOptions: {
      sass: {
        includePaths: [
          path.resolve(__dirname, 'node_modules/uswds/dist/scss'),
          path.resolve(__dirname, 'node_modules/uswds/dist/scss/packages'),
          path.resolve(__dirname, 'node_modules/uswds/dist/scss/theme'),
        ],
      },
    },
  },
};
