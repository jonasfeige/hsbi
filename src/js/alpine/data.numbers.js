import { inView, animate } from 'motion'

export default () => ({
	init() {
		const counters = [...this.$el.querySelectorAll('[data-counter]')]
		counters.forEach((counter) => {
			const count = counter.dataset.count
			const duration = this.calculateDuration(count)
			inView(counter, () => {
				setTimeout(() => {
					animate(
						(progress) => (counter.innerHTML = Math.round(progress * count)),
						{
							duration: duration,
							easing: 'ease-in-out',
						}
					),
						{
							amount: 1,
						}
				}, 150)
			})
		})
	},
	calculateDuration(target, baseDuration = 5000, scalingFactor = 500) {
		const adjustedTarget = Math.max(target, 1)
		const duration = baseDuration + scalingFactor * Math.log(adjustedTarget)
		return duration / 10000
	},
})
