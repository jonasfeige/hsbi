export default () => ({
	activeEntry: 1,
	init() {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						this.activeEntry = entry.target.dataset.locationEntry
					}
				})
			},
			{
				rootMargin: '-50% 0% -50% 0%',
				threshold: 0,
			}
		)

		const entries = [...document.querySelectorAll('[data-location-entry]')]
		entries.forEach((entry) => {
			observer.observe(entry)
		})
	},
})
