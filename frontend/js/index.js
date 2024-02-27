import 'lazysizes'

//import smoothscroll from 'smoothscroll-polyfill'
//smoothscroll.polyfill()
//is fixed in safari now

// core version + navigation, pagination modules:
import Swiper, { Zoom } from 'swiper'

import {
	feed,
	overlay,
  info
} from '../frontend/js/home-objects.js'
import {
  //resizeFeed,
  openFeed,
  closeFeed
} from '../frontend/js/home-functions.js'
import {
	page,
	//observeVpItems //need?
} from '../frontend/js/main-objects.js'
import {
	resizePage,
	fixPage,
	unfixPage,
  startVideosOnce
} from '../frontend/js/main-functions.js'
import { SwipeContent } from '../frontend/js/swipe-content.js'
import { browserTypes } from '../frontend/js/duck.js'
//import { getCookie, setCookie } from '../frontend/js/main-functions.js' //this is imported automatically????

// Safari Back-/Forward-Button fix
window.onpageshow = (ev) => {
	if (ev.persisted) {
		window.location.reload()
	}
}

window.onload = () => {
	let throttle = require('lodash.throttle')
	let debounce = require('lodash.debounce')
	
	
	let init = () => {
		console.log('initialized frontend')
	}
	//fixPage(page)
	setTimeout(() => {
		//unfixPage(page)
		document.documentElement.classList.add('page-loaded')
		page.loaded = true
		//resize()
		init(Swiper, Zoom)
	}, 150)

	
	/*if (getCookie('enderem-cn-accepted') !== 'confirmed') {
		setTimeout(() => {
			page.cookieNotice.cr.classList.add('is-visible')
		}, 300)
		page.cookieNotice.btn.addEventListener('click', () => {
			setCookie('enderem-cn-accepted', 'confirmed', 365)
			page.cookieNotice.cr.classList.remove('is-visible')
		})
	}*/


}
