import { PointerListener, Pan } from 'contactjs'

export default (id) => ({
	id: id,
	transitioning: false,
	init() {
		const content = this.$el.querySelector('[data-faculty-content]')
		const pointerListener = new PointerListener(this.$el, {
			supportedGestures: [Pan],
		})
		const threshhold = (window.innerWidth / 2) * -1
		content.addEventListener('panstart', (event) => {
			content.classList.remove(
				'transition-transform',
				'duration-500',
				'ease-in-out'
			)
		})
		content.addEventListener('panleft', (event) => {
			if (this.transitioning) return
			const x = event.detail.global.deltaX
			content.style.transform = `translateX(${x}px)`
			if (x < threshhold) {
				content.classList.add(
					'transition-transform',
					'duration-500',
					'ease-in-out'
				)
				this.transitioning = true
				this.openFaculty = this.id
				content.style = null
				setTimeout(() => {
					this.transitioning = false
				}, 300)
			}
		})
		content.addEventListener('panend', (event) => {
			content.classList.add(
				'transition-transform',
				'duration-500',
				'ease-in-out'
			)
			const newTranslate = event.detail.global.deltaX
			this.transitioning = true
			setTimeout(() => {
				content.style = null
				this.transitioning = false
			}, 150)
		})
	},
})
