import { scroll, animate } from 'motion'

export default () => ({
	init() {
		setTimeout(() => {
			const toLeft = this.$el.querySelector('[data-header-to-left]')
			const toRight = this.$el.querySelector('[data-header-to-right]')
			const content = document.querySelector('#content')
			const windowWidth = window.innerWidth
			const picture = this.$el.querySelector('picture')

			animate(toLeft, { x: [-100, 0], opacity: [0, 1] })
			animate(toRight, { x: ['100px', 0], opacity: [0, 1] })

			setTimeout(() => {
				scroll(animate(toLeft, { x: [0, windowWidth * 2 * -1] }), {
					target: content,
					offset: ['start end', `start -${window.innerHeight}px`],
				})
				scroll(animate(toRight, { x: [0, windowWidth * 2] }), {
					target: content,
					offset: ['start end', `start -${window.innerHeight}px`],
				})
			}, 300)
			if (picture) {
				scroll(animate(picture, { opacity: [1, 0.5] }), {
					target: content,
					offset: ['start end', `start -${window.innerHeight / 4}px`],
				})
			}
		}, 150)
	},
})
