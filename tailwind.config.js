module.exports = {
	content: [
		'./safelist.txt',
		'./src/**/*.js',
		'./src/*.js',
		'./site/config/*.php',
		'./site/snippets/*.php',
		'./site/snippets/**/*.php',
		'./site/templates/*.php',
		'./site/templates/**/*.php',
	],
	theme: {
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			white: '#f8f5f0',
			black: '#0C0C0C',
			foreground: 'var(--foreground)',
			background: 'var(--background)',
		},
		fontFamily: {
			sans: 'var(--font-sans)',
		},
		fontSize: {
			h1: ['150px', '1'],
			h2: ['110px', '1'],
			h3: ['70px', '1'],
			copy: ['50px', '1.125'],
		},
		extend: {
			scale: {
				pre: 1.001,
			},
			spacing: {
				arrow: '120px',
				slide: 'var(--slide)',
				'1px': '1px',
				'2px': '2px',
				'3xs': 'var(--space-3xs)',
				'2xs': 'var(--space-2xs)',
				xs: 'var(--space-xs)',
				s: 'var(--space-s)',
				m: 'var(--space-m)',
				l: 'var(--space-l)',
				xl: 'var(--space-xl)',
				'2xl': 'var(--space-2xl)',
				'3xl': 'var(--space-3xl)',
				'4xl': 'var(--space-4xl)',
				'5xl': 'var(--space-5xl)',
				'6xl': 'var(--space-6xl)',
				'3xs-2xs': 'var(--space-3xs-2xs)',
				'2xs-xs': 'var(--space-2xs-xs)',
				'xs-s': 'var(--space-xs-s)',
				's-m': 'var(--space-s-m)',
				'm-l': 'var(--space-m-l)',
				'l-xl': 'var(--space-l-xl)',
				'xl-2xl': 'var(--space-xl-2xl)',
				'2xl-3xl': 'var(--space-2xl-3xl)',
				'3xl-4xl': 'var(--space-3xl-4xl)',
				'4xl-5xl': 'var(--space-4xl-5xl)',
				'5xl-6xl': 'var(--space-5xl-6xl)',
				/* Custom pairs */
				's-2xl': 'var(--space-s-2xl)',
				'l-2xl': 'var(--space-l-2xl)',
				'm-3xl': 'var(--space-m-3xl)',
				/* Faculty Pan */
				'faculty': 'calc(100% - 1px)'
			},
			animation: {
				'bounce-xl': 'bounce-xl 1s infinite',
			},
		},
	},
}
