import { inView, animate } from 'motion'

export default () => ({
	init() {
		const counter = this.$el.querySelector('[data-counter]')
		const count = counter.dataset.count

		inView(counter, () => {
			setTimeout(() => {
				animate(
					(progress) => (counter.innerHTML = Math.round(progress * count)),
					{
						duration: 2,
						easing: 'ease-out',
					}
				),
					{
						amount: 1,
					}
			}, 150)
		})
	},
})
