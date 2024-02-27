export let feed = (document.querySelector('.feed')) ? {
  el: document.querySelector('.feed'),
  btn: document.querySelector('.feed button'),
  thumbs: (document.querySelector('.feed li[data-id]')) ? Array.prototype.map.call(document.querySelectorAll('.feed li[data-id]'), function (item) {
    return {
      el: item,
      id: item.getAttribute('data-id'),
      d: {
        h: undefined,
        t: undefined,
        b: undefined,
      },
      isVi: undefined
    }
  }) : undefined,
  headersHeight: undefined,
  dragStart: undefined,
  dragDist: undefined,
  dragMax: undefined,
  dragUp: undefined,
  scrollTop: undefined, // is used???
  isAc: undefined
} : undefined

// TODO slide headlines etc

export let overlay = (document.querySelector('.overlay')) ? {
  el: document.querySelector('.overlay'),
  header: {
    el: document.querySelector('.overlay header'),
    d: {
      h: undefined
    },
    h2: document.querySelector('.overlay header h2'),
    h3: document.querySelector('.overlay header h3'),
    btn: document.querySelector('.overlay header button')
  },
  swiperWr: document.querySelector('.overlay .swiper'),
  swiper: undefined,
  slides: Array.prototype.map.call(document.querySelectorAll('.overlay .swiper-slide'), function (item) {
    return {
      el: item,
      id: item.getAttribute('data-id'),
      index: item.getAttribute('data-index'),
      h2: item.getAttribute('data-title'),
      h3: item.getAttribute('data-subheadline')
    }
  }),
  isAc: undefined,
  isVi: undefined
} : undefined

export let info = (document.querySelector('.info')) ? {
  el: document.querySelector('.info')
} : undefined