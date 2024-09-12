export default () => ({
	isPaused: true,
	init() {
		this.video = this.$refs.video
		this.video.addEventListener('ended', () => {
			if(document.fullscreenElement) document.exitFullscreen();
		})
		this.video.addEventListener('play', () => {
			this.isPaused = false
		})
		this.video.addEventListener('pause', () => {
			this.isPaused = true
		})
	},
	toggle() {
		if (this.isPaused) this.play()
		else this.pause()
	},
	play() {
		this.isPaused = false
		this.video.play()
	},
	pause() {
		this.isPaused = true
		this.video.pause()
	},
})
