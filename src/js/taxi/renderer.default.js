import { Renderer } from '@unseenco/taxi'
import { animate } from 'motion'

const backLink = document.querySelector('#back-link')

export default class DefaultRenderer extends Renderer {
	onEnter() {
		const backLinkUrl = this.content.dataset.backLinkUrl
		const backLinkRotation = this.content.dataset.backLinkRotation
		const isSubpage = !!this.content.dataset.isSubpage

		if (isSubpage) {
			backLink.setAttribute('data-transition', 'fromSubpage')
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

		// run after the new content has been added to the Taxi container
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
