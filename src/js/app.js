import * as Taxi from '@unseenco/taxi'
// import Lenis from 'lenis'
import Alpine from 'alpinejs'

import gallery from './alpine/data.gallery'
import header from './alpine/data.header'
import faculty from './alpine/data.faculty'
import numbers from './alpine/data.numbers'
import location from './alpine/data.location'
import wheel from './alpine/data.wheel'

import DefaultRenderer from './taxi/renderer.default'
import HomeToProgramsTransition from './taxi/transition.homeToPrograms'
import HomeToHsbiTransition from './taxi/transition.homeToHsbi'
import ProgramsToHomeTransition from './taxi/transition.programsToHome'
import HsbiToHomeTransition from './taxi/transition.hsbiToHome'
import ToSubpageTransition from './taxi/transition.toSubpage'
import FromSubpageTransition from './taxi/transition.fromSubpage'
import SubpageToSubpageTransition from './taxi/transition.subpageToSubpage'
import ToFacultyTransition from './taxi/transition.toFaculty'
import FromFacultyTransition from './taxi/transition.fromFaculty'

document.addEventListener('alpine:init', () => {
	Alpine.data('gallery', gallery)
	Alpine.data('header', header)
	Alpine.data('faculty', faculty)
	Alpine.data('location', location)
	Alpine.data('numbers', numbers)
	Alpine.data('wheel', wheel)
})

window.addEventListener('popstate', () => {
	window.location.reload()
})

Alpine.start()

const taxi = new Taxi.Core({
	bypassCache: true,
	removeOldContent: false,
	renderers: {
		default: DefaultRenderer,
	},
	transitions: {
		homeToPrograms: HomeToProgramsTransition,
		homeToHsbi: HomeToHsbiTransition,
		programsToHome: ProgramsToHomeTransition,
		hsbiToHome: HsbiToHomeTransition,
		toSubpage: ToSubpageTransition,
		toFaculty: ToFacultyTransition,
		fromFaculty: FromFacultyTransition,
		fromSubpage: FromSubpageTransition,
		subpageToSubpage: SubpageToSubpageTransition,
	},
})

taxi.addRoute('/', '/studieren', 'homeToPrograms')
taxi.addRoute('/', '/hsbi', 'homeToHsbi')
taxi.addRoute('/studieren', '/', 'programsToHome')
taxi.addRoute('/hsbi', '/', 'hsbiToHome')

setTimeout(() => {
	document.querySelector('#back-link').classList.remove('opacity-0')
}, 300)

export default taxi