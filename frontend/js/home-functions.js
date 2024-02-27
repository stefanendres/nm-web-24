export function resizeFeed(page, feed) {
  feed.thumbs.forEach((item) => {
    const bcr = item.el.getBoundingClientRect()
    item.d.h = bcr.height
    item.d.t = bcr.top + page.vp.t
    //console.log(item.d.t)
    item.d.b = bcr.top + page.vp.t + bcr.height
  })
  feed.headersHeight = feed.el.querySelector('header').getBoundingClientRect().height
}

export function openFeed(page, feed) {
  //feed.el.style.transition = 'transform ' + (1 - 100 / ev.detail.y) +'s ease-in-out' //need?
  feed.el.style.transition = 'transform .3s ease-in-out'
  feed.el.style.transform = 'translate3d(0,0,0)'
  feed.el.style.overflowY = 'scroll'
  feed.el.classList.add('is-active')
  feed.isAc = true
  feed.dragDist = 0
  feed.dragStart = 0
  //unfixPage(page)
  if (Modernizr.touchevents) {
    window.scrollBy(0, -1)
    setTimeout(() => {
      window.scrollBy(0, 1)
    }, 100);
    /*setTimeout(() => {
      fixPage(page)
    }, 350);*/
  }
  if (!feed.headersHeight) { // resize feed once
    setTimeout(() => {
      resizeFeed(page, feed)
    }, 500)
  }
  if (page.videoObserver) {
    setTimeout(() => {
      page.videos.forEach(video => {
        page.videoObserver.observe(video)
      })
    }, 310) //300ms transition-duration
  }
}

export function closeFeed(page, feed, info) {
  feed.el.style.transform = 'translate3d(0,' + feed.dragMax + 'px,0)'
  feed.el.classList.remove('is-active')
  feed.isAc = false
  feed.dragDist = 0
  feed.dragStart = 0
  //setTimeout(() => { // avoid body scroll after dragEnd
  //unfixPage(page)
  //}, 301)
  if (page.videoObserver) {
    page.videos.forEach(video => {
      page.videoObserver.unobserve(video)
    })
  }
  info.el.style.opacity = 1
}