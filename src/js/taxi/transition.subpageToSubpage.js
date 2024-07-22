import { Transition } from '@unseenco/taxi'

export default class ToSubpageTransition extends Transition {
	onLeave({ from, trigger, done }) {
		from.classList.add('old')
		done()
	}

	onEnter({ to, trigger, done }) {
		const oldView = document.querySelector('.old')
		oldView.remove()
		window.scrollTo({
			top: 0,
			left: 0,
			behavior: 'instant',
		})
		done()
	}
}
