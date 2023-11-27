// webpack.config.js
module.exports = {
    entry: './progress.js',
    output: {
      filename: 'bundle.js'
    },
    externals: {
      // Exclude MySQLi from the bundle as it's already loaded globally
      mysql: 'mysql'
    }
  };