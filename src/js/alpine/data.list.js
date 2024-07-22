import { inView, animate } from 'motion'

export default () => ({
	init() {
		const elements = [...this.$el.querySelectorAll('li')]
		elements.forEach((element) => {
			inView(
				element,
				() => {
					animate(
						element,
						{
							opacity: [0, 1],
							y: [20, 0],
						},
						{
							duration: 0.5,
							easing: 'ease-in-out',
						}
					)
				},
				{
					amount: 0.5,
				}
			)
		})
	},
})
