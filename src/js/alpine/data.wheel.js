import Alpine from 'alpinejs'
import EmblaCarousel from 'embla-carousel'

export default (id) => ({
	scrolling: false,
	grabbing: false,
	activeSlideIndex: 0,
	init() {
		setTimeout(() => {
			this.$el.classList.remove('opacity-0')
			this.$el.classList.remove('pointer-events-none')
		}, 300)
		this.id = id

		/* Init */
		this.wheel = EmblaCarousel(this.$el.querySelector('.embla'), {
			loop: true,
			axis: 'y',
			skipSnaps: true,
			align: 'center',
		})

		/* Scrol to previous slide */
		const prevScroll = Alpine.store('page')[this.id]
		if (prevScroll) this.wheel.scrollTo(prevScroll, true)

		/* Add listeners */
		this.wheel.on('select', () => {
			this.activeSlideIndex = this.wheel.selectedScrollSnap()
			Alpine.store('page')[this.id] = this.wheel.selectedScrollSnap()
		})
		this.wheel.on('pointerDown', () => {
			this.grabbing = true
		})
		this.wheel.on('pointerUp', () => {
			this.grabbing = false
		})
	},
	goToSlide(index) {
		console.log(index);
		this.wheel.scrollTo(index)
	},
	get activeSlide() {
		return this.wheel.slideNodes()[this.activeSlideIndex]
	},
	get activeSlideUrl() {
		return this.activeSlide.dataset.url
	},
	get activeSlideText() {
		return this.activeSlide.dataset.title
	},
})
