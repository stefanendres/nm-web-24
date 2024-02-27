export let page = {
  siteUrl: document.querySelector('body').getAttribute('data-site-url'),
  siteTitle: document.querySelector('body').getAttribute('data-site-title'),
  url: document.querySelector('body').getAttribute('data-page-url'),
  title: document.querySelector('body').getAttribute('data-page-title'),
  template: document.querySelector('body').getAttribute('data-template-slug'),
  slug: document.querySelector('body').getAttribute('data-page-slug'),
  d : {
    h: undefined,
    sbW: undefined
  },
  vp: {
    h: undefined,
    initH: undefined, 
    w: undefined,
    t: (window.scrollY || document.documentElement.scrollTop),
    sot: undefined,
    orientation: (window.innerWidth >= window.innerHeight) ? 'landscape' : 'portrait',
    isSmall: (window.matchMedia("(max-width: 800px)").matches) ? true : false,
    lastRatio: undefined
  },
  videos: document.querySelectorAll('video'),
  videoObserver: null,
  spacerObserver: null,
  interaction: {
    triggered: false,
    x: undefined,
    y: undefined,
    startX: 0,
    endX: 0,
    startY: 0,
    endY: 0
  },
  scrolledOnce: false,
  lastScrollTop: undefined,
  loaded: false,
  body: document.querySelector('body'),
  pageCr: {
    el: document.querySelector('main'),
    h: undefined // neeed?
  },
}

