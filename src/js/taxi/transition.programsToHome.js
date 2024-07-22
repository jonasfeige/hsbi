import { Transition } from '@unseenco/taxi'
import { animate } from 'motion'

export default class ProgramsToHomeTransition extends Transition {
	onLeave({ from, trigger, done }) {
		from.classList.add('old')
		const animation = animate(from, {
			y: '100%',
		})

		done()
	}

	onEnter({ to, trigger, done }) {
		const oldView = document.querySelector('.old')
		to.classList.add('fixed')

		const animation = animate(to, {
			y: ['-100%', 0],
		})
		animation.finished.then(() => {
			oldView.remove()
			to.classList.remove('fixed')
			done()
		})
	}
}
