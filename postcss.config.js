const cssnano = require('cssnano')({
	preset: [
		'default',
		{
			discardComments: {
				removeAll: true,
			},
		},
	],
})

module.exports = {
	plugins: [
		require('postcss-import'),
		require('tailwindcss')('./tailwind.config.js'),
		require('postcss-nesting'),
		require('autoprefixer'),
		require('css-has-pseudo'),
		...(process.env.NODE_ENV === 'production'
			? [cssnano] // what other postcss plugins should run
			: []),
	],
}
