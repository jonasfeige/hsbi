import { scroll, animate } from 'motion'

export default () => ({
	init() {
		const firstImage = this.$el.querySelector('[data-gallery-first]')
		scroll(animate(firstImage, { scale: [0.4, 1] }), {
			target: firstImage,
			offset: ['start end', 'end end'],
		})
	},
})
