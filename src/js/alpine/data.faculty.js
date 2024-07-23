import taxi from '../app'
import { PointerListener, Pan } from 'contactjs'

export default () => ({
	transitioning: false,
	prevTranslate: 0,
	init() {
		const content = this.$el.querySelector('[data-faculty-content]')
		const trigger = this.$el.querySelector('[data-faculty-trigger]')
		const link = this.$el.querySelector('a')
		const pointerListener = new PointerListener(this.$el, {
			supportedGestures: [Pan],
		})
		// trigger.addEventListener('swipeleft', (e) => {
		// 	this.$el.scrollIntoView()
		// 	taxi.navigateTo(link.href, 'toSubpage')
		// })
		trigger.addEventListener('panstart', (event) => {})
		trigger.addEventListener('panleft', (event) => {
			if (this.transitioning) return
			const x = event.detail.global.deltaX
			let translate = this.prevTranslate - x
			content.style.transform = `translateX(${translate * -1}px)`
			if (translate > 200) {
				this.transitioning = true
				this.$el.scrollIntoView()
				taxi.navigateTo(link.href, 'toSubpage')
			}
		})
		trigger.addEventListener('panright', (event) => {
			const x = event.detail.global.deltaX
			let translate = this.prevTranslate - x
			content.style.transform = `translateX(${translate * -1}px)`
		})
		trigger.addEventListener('panend', (event) => {
			const newTranslate = event.detail.global.deltaX
			this.prevTranslate = this.prevTranslate - newTranslate
		})
	},
})
