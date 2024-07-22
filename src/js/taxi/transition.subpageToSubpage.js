import { Transition } from '@unseenco/taxi'
import { animate } from 'motion'

let transitioner

export default class ToSubpageTransition extends Transition {
	onLeave({ from, trigger, done }) {
		from.classList.add('old')
		transitioner = document.createElement('div')
		transitioner.classList.add('transitioner')
		document.body.appendChild(transitioner)
		const animation = animate(
			transitioner,
			{
				scaleX: [0, 1],
			},
			{
				easing: 'ease-in-out',
			}
		)
		animation.finished.then(() => {
			done()
		})
	}

	onEnter({ to, trigger, done }) {
		window.scrollTo({
			top: 0,
			left: 0,
			behavior: 'instant',
		})
		const oldView = document.querySelector('.old')
		oldView.remove()
		transitioner.style.transformOrigin = 'left'
		const animation = animate(
			transitioner,
			{
				scaleX: [1, 0],
			},
			{
				easing: 'ease-in-out',
			}
		)
		animation.finished.then(() => {
			transitioner.remove()
			done()
		})
	}
}
