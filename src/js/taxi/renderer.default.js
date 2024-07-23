import { Renderer } from '@unseenco/taxi'
import { inView, animate } from 'motion'

const backLink = document.querySelector('#back-link')

export default class DefaultRenderer extends Renderer {
	onEnter() {
		const backLinkUrl = this.content.dataset.backLinkUrl
		const backLinkRotation = this.content.dataset.backLinkRotation
		const backLinkTransition = this.content.dataset.backLinkTransition

		// setTimeout(() => {
		// 	const hash = window.location.hash
		// 	if (hash) {
		// 		const element = this.content.querySelector(`${hash}`)
		// 		const top = element.getBoundingClientRect().top + window.scrollY
		// 		window.scrollTo({
		// 			left: 0,
		// 			top: top,
		// 			behavior: 'instant',
		// 		})
		// 	}
		// }, 300)

		if (backLinkTransition) {
			backLink.setAttribute('data-transition', backLinkTransition)
		} else {
			backLink.removeAttribute('data-transition')
		}

		if (backLinkUrl != '') {
			animate(backLink, {
				y: 0,
				rotate: `${backLinkRotation}deg`,
			})
			backLink.href = this.content.dataset.backLinkUrl
		} else {
			animate(backLink, {
				y: '-100%',
				rotate: `${backLinkRotation}deg`,
			})
		}

		/* Fade in */
		const elements = [...this.content.querySelectorAll('[data-fade-in]')]
		const listElements = [...this.content.querySelectorAll('.prose li')]
		// const paragraphs = [...this.content.querySelectorAll('.prose p')]
		const allElements = elements.concat(listElements)
		allElements.forEach((element) => {
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
	}

	onEnterCompleted() {
		// run after the transition.onEnter has fully completed
	}

	onLeave() {
		// run before the transition.onLeave method is called
	}

	onLeaveCompleted() {
		// run after the transition.onleave has fully completed
	}
}
