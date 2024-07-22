import * as Taxi from '@unseenco/taxi'
import Alpine from 'alpinejs'

import page from './alpine/store.page'
import gallery from './alpine/data.gallery'
import header from './alpine/data.header'
import list from './alpine/data.list'
import info from './alpine/data.info'
import wheel from './alpine/data.wheel'

import DefaultRenderer from './taxi/renderer.default'
import HomeToProgramsTransition from './taxi/transition.homeToPrograms'
import HomeToHsbiTransition from './taxi/transition.homeToHsbi'
import ProgramsToHomeTransition from './taxi/transition.programsToHome'
import HsbiToHomeTransition from './taxi/transition.hsbiToHome'
import ToSubpageTransition from './taxi/transition.toSubpage'
import FromSubpageTransition from './taxi/transition.fromSubpage'
import SubpageToSubpageTransition from './taxi/transition.subpageToSubpage'

document.addEventListener('alpine:init', () => {
	Alpine.store('page', page)
	Alpine.data('gallery', gallery)
	Alpine.data('header', header)
	Alpine.data('list', list)
	Alpine.data('info', info)
	Alpine.data('wheel', wheel)
})

Alpine.start()

const taxi = new Taxi.Core({
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
		fromSubpage: FromSubpageTransition,
		subpageToSubpage: SubpageToSubpageTransition,
	},
})

taxi.addRoute('/', '/studieren', 'homeToPrograms')
taxi.addRoute('/', '/hsbi', 'homeToHsbi')
taxi.addRoute('/studieren', '/', 'programsToHome')
taxi.addRoute('/hsbi', '/', 'hsbiToHome')
