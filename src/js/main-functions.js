export function resizePage(page) {
  page.d.h = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
  if (!page.d.sbW) {
    page.d.sbW = window.innerWidth - document.documentElement.clientWidth
    document.documentElement.style.setProperty('--sb_w', ''+page.d.sbW +'px')
  }

  if (window.innerWidth >= window.innerHeight) {
    page.vp.orientation = 'landscape'
    document.documentElement.classList.remove('portrait')
    document.documentElement.classList.add('landscape')
  } else {
    page.vp.orientation = 'portrait'
    document.documentElement.classList.remove('landscape')
    document.documentElement.classList.add('portrait')
  }

  page.vp.isSmall = (window.matchMedia("(max-width: 800px)").matches) ? true : false
  page.vp.h = window.innerHeight
  if (!page.vp.initH){
    page.vp.initH = window.innerHeight
    document.documentElement.style.setProperty('--vp_ih', '' + window.innerHeight + 'px')
  }
  page.vp.w = window.innerWidth
  page.vp.t = (window.scrollY || document.documentElement.scrollTop)
  
  // orientationchange event "polyfill"
  if ((1 - page.vp.lastRatio) <= 0 && (1 - (window.innerWidth / window.innerHeight)) > 0) {
    window.location.reload()
    //console.log('orientationchange from landscape to portrait')
  } else if ((1 - page.vp.lastRatio) > 0 && (1 - (window.innerWidth / window.innerHeight)) <= 0) {
    window.location.reload()
    //console.log('orientationchange from portrait to landscape')
  } else {
    //console.log('no orientationchange')
  }
  page.vp.lastRatio = window.innerWidth / window.innerHeight
}

export function fixPage(page) {
  page.body.classList.add('is-fixed')
  page.body.style.position = 'fixed'
  page.body.style.top = -1 * page.vp.t + 'px'
  page.vp.sot = page.vp.t
}

export function unfixPage(page) {
  page.body.classList.remove('is-fixed')
  page.body.style.position = 'relative'
  page.body.style.top = ''
  window.scrollTo(0,page.vp.sot)
}

export function startVideosOnce(page) {
  if (!page.interaction.triggered) {
    page.videos.forEach((video) => {
      if (video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 4) {
        //console.log('video already playing')
      } else {
        let playPromise = video.play()
        if (playPromise !== undefined) {
          playPromise.then(() => {
            video.src = ''
            video.removeAttribute('src')
            video.load()
          }).catch(error => {
            // Auto-play was prevented
            // Show paused UI.
          });
        }
        //console.log('video started by touch')
      }
    })
    page.interaction.triggered = true
  }
}

export function isTouchDevice() {
  return (('ontouchstart' in window) ||
    (navigator.maxTouchPoints > 0) ||
    (navigator.msMaxTouchPoints > 0));
}

export function setCookie(cname, cvalue, exdays) {
  var d = new Date()
  d.setTime(d.getTime() + (exdays*24*60*60*1000))
  var expires = 'expires='+ d.toUTCString()
  document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/'
}

export function getCookie(cname) {
  const name = cname + '='
  const decodedCookie = decodeURIComponent(document.cookie)
  const ca = decodedCookie.split(';')
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i]
    while (c.charAt(0) == ' ') {
      c = c.substring(1)
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length)
    }
  }
  return ''
}

export function resizeCollections(Swiper, Autoplay, page, collections) {
  collections.forEach((collection, index) => {
    if (collection.swiperWr.scrollWidth - 1 >= collection.swiperWr.clientWidth) {
      if (!collection.swiper) {
        initCollectionSwiper(page, collection, Swiper, Autoplay, index)
      } else {
        collection.swiper.destroy()
        collection.swiper = undefined
        initCollectionSwiper(page, collection, Swiper, Autoplay, index)
      }
      collection.el.classList.remove('static')
    } else {
      if (collection.swiper) {
        collection.swiper.destroy()
        collection.swiper = undefined
      }
      collection.el.classList.add('static')
    }
  })
}


function initCollectionSwiper(page, collection, Swiper, Autoplay, index) {
  //console.log(page.isTouchDevice)
  collection.swiper = new Swiper({
    el: collection.el.querySelector('.swiper'),
    modules: [Autoplay],
    autoplay: {
      enabled: (page.isTouchDevice) ? false : true,
      delay: (3000 + index * 75),
      pauseOnMouseEnter: true,
    },
    speed: 600,
    loopedSlides: parseInt(collection.el.querySelector('.swiper').getAttribute('data-slide-count')),
    loop: true,
    grabCursor: true,
    slidesPerView: 'auto'
  })
}