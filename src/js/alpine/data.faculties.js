import { clearAllBodyScrollLocks, disableBodyScroll } from 'body-scroll-lock'

export default () => ({
	openFaculty: null,
	openFacultyIndex: null,
	init() {
		const backLink = document.querySelector('#back-link')
		const facultiesBackLink = document.querySelector('#faculties-back-link')
		this.$watch('openFaculty', (value) => {
			if (value) {
				backLink.classList.add('hidden')
				facultiesBackLink.classList.remove('hidden')
				const element = document.querySelector(`#${value}`)
				// const top = getStickyElementTop(element)
				const top = window.innerHeight * this.openFacultyIndex
				window.scrollTo({
					top: top,
					left: 0,
					behavior: 'smooth',
				})
				setTimeout(() => {
					disableBodyScroll(element, {
						reserveScrollBarGap: true,
					})
				}, 150)
			} else {
				backLink.classList.remove('hidden')
				facultiesBackLink.classList.add('hidden')
				clearAllBodyScrollLocks()
			}
		})
	},
})

function getStickyElementTop(stickyElement) {
	// Temporarily change position to static
	const originalPosition = stickyElement.style.position
	stickyElement.style.position = 'static'

	// Calculate the top position
	const rect = stickyElement.getBoundingClientRect()
	const top = rect.top + window.pageYOffset

	// Revert position back to sticky
	stickyElement.style.position = originalPosition

	return top
}
