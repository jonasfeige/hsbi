import Alpine from 'alpinejs'
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
		const animation = animate(to, {
			x: ['100%', 0],
		})
		animation.finished.then(() => {
			Alpine.store('page').visible = false
			oldView.remove()
			to.classList.remove('fixed')
			done()
		})
	}
}
