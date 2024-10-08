import { Transition } from '@unseenco/taxi'
import { animate } from 'motion'

export default class ToSubpageTransition extends Transition {
	onLeave({ from, trigger, done }) {
		from.classList.add('old')
		done()
	}

	onEnter({ to, trigger, done }) {
		const oldView = document.querySelector('.old')
		to.classList.add('fixed')
		to.classList.add('z-30')
		const animation = animate(to, {
			x: ['100%', 0],
		})
		animation.finished.then(() => {
			oldView.remove()
			to.classList.remove('fixed')
			to.classList.remove('z-30')
			done()
		})
	}
}
