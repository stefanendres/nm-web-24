import 'lazysizes'

//import smoothscroll from 'smoothscroll-polyfill'

// core version + navigation, pagination modules:
import Swiper from 'swiper'
import { Pagination, Autoplay } from 'swiper/modules'

import instantsearch from 'instantsearch.js';
import { searchBox, infiniteHits, refinementList } from 'instantsearch.js/es/widgets';
import { connectInfiniteHits } from 'instantsearch.js/es/connectors';
import { history } from 'instantsearch.js/es/lib/routers';

import {
  page, collections
} from '/js/main-objects.js'
import { isTouchDevice, getCookie, setCookie, resizeCollections } from '/js/main-functions.js'

page.isTouchDevice = isTouchDevice()

window.onload = () => {
  (page.isTouchDevice) ? page.html.classList.add('is-touch') : page.html.classList.add('no-touch')
  const throttle = require('lodash.throttle')
  const debounce = require('lodash.debounce')
  const algoliasearch = require('algoliasearch')


  

  // observers
  let embedObserver = null
  if (!!window.IntersectionObserver) {
    // lazyload iframes
    embedObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.innerHTML += entry.target.getAttribute('data-html')
        }
      })
    }, { threshold: 0 })
  }
	
	
	let init = () => {
		console.log('initialized frontend')
		if (page.template == 'post') {
      //init sliders
			let sliderBlocks = document.querySelectorAll('.swiper')
			sliderBlocks.forEach((sliderBlock, index) => {
				sliderBlock.swiper = new Swiper({
          el: sliderBlock,
					modules: [Pagination, Autoplay],
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          autoplay: {
            enabled: (page.isTouchDevice) ? false : true,
            delay: (2000 + index * 75),
            pauseOnMouseEnter: true,
          },
          speed: 600,
			    loop: true,
          grabCursor: true,
					centeredSlides: true,
					slidesPerView: 1
				})
			})
      //init iframe lazyload
      let embedBlocks = document.querySelectorAll('.embed')
      embedBlocks.forEach(embedBlock => {
        embedObserver.observe(embedBlock)
      })

      let relatedButton = document.querySelector('.data-3 button.expand')
      let relatedContent = document.querySelector('.data-3 ul')
      if (relatedButton) {
        relatedButton.addEventListener('click', () => {
          if (relatedContent.classList.contains('is-active')) {
            relatedContent.classList.remove('is-active')
            relatedButton.classList.remove('is-active')
          } else {
            relatedContent.classList.add('is-active')
            relatedButton.classList.add('is-active')
          }
        })
      }

      let layout = document.querySelector('.layout')
      let overlay = document.querySelector('.post-overlay')
      let overlayButton = document.querySelector('button.more')

      if (!overlay.classList.contains('hide-on-load')){
        setTimeout(() => {
          overlay.classList.add('is-active')
          overlayButton.classList.add('is-active')
          layout.classList.add('is-blurred')
        }, 300)
      }

      overlayButton.addEventListener('click', () => {
        if (overlay.classList.contains('is-active')) {
          overlay.classList.remove('is-active')
          overlayButton.classList.remove('is-active')
          layout.classList.remove('is-blurred')
          if (relatedButton && relatedContent.classList.contains('is-active')) {
            relatedContent.classList.remove('is-active')
            relatedButton.classList.remove('is-active')
          }
        } else {
          overlay.classList.add('is-active')
          overlayButton.classList.add('is-active')
          layout.classList.add('is-blurred')
        }
      })

      let throttleCloseOverlay = throttle(() => {
        if (overlay.classList.contains('is-active')) {
          overlay.classList.remove('is-active')
          overlayButton.classList.remove('is-active')
          layout.classList.remove('is-blurred')
          if (relatedButton && relatedContent.classList.contains('is-active')) {
            relatedContent.classList.remove('is-active')
            relatedButton.classList.remove('is-active')
          }
        }
      }, 300)


      window.addEventListener('scroll', throttleCloseOverlay)
		}

    if (page.template == 'home' || page.template == 'info') {
      if (collections) {
        let resize = () => {
          resizeCollections(Swiper, Autoplay, page, collections)
        }
        resize()
        let debouncedResize = debounce(resize, 300)
        window.addEventListener('resize', debouncedResize)
        if (page.isTouchDevice) {
          collections.forEach((collection, index) => {
            if (collection.swiper) {
              collection.swiper.slidePrev(0, false)
              setTimeout(() => {
                collection.swiper.slideNext()
              }, (300+150*index))
            }
          })
        }
      }
    }

    if (page.template == 'posts'){
      //if (search) {
      
      const searchClient = algoliasearch(import.meta.env.VITE_ALGOLIA_APP_ID, import.meta.env.VITE_ALGOLIA_SEARCH_API_KEY);
        // setup search ui
        const instantSearch = instantsearch({
          indexName: import.meta.env.VITE_ALGOLIA_INDEX_NAME,
          searchClient,
          routing: {
            router: history({ cleanUrlOnDispose: true }),
          },
          future: {
            preserveSharedStateOnUnmount: true,
          },
        });

        // infinite scroll: https://github.com/algolia/doc-code-samples/blob/master/instantsearch.js/infinite-scroll/src/app.js
        let lastRenderArgs;
        
        const renderInfiniteHits = //connectSearchBox(
          (renderArgs, isFirstRender) => {
            const { hits, showMore, widgetParams } = renderArgs;
            const { container } = widgetParams;

            lastRenderArgs = renderArgs;

            if (isFirstRender) {
              const sentinel = document.createElement('div');
              container.appendChild(document.createElement('ul'));
              container.appendChild(sentinel);

              const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                  if (entry.isIntersecting && !lastRenderArgs.isLastPage) {
                    showMore();
                  }
                });
              });

              observer.observe(sentinel);

              return;
            }

            container.querySelector('ul').innerHTML = hits.map(
              (hit, components) => 
                `<div class="search-hit-item post-thumb style-tiny" data-uuid="${hit.objectID}">
                  <a class="wrapper" href="${hit.url}">
                    <figure class="thumb">
                      <img class="lazyload" data-src="${hit.thumbSrc}"/>
                    </figure>
                    <div>
                      <h3><div>${components.Highlight({ hit, attribute: 'category' })}: </div> ${components.Highlight({ hit, attribute: 'title' })}</h3>
                      <p>${components.Highlight({ hit, attribute: 'tags' })}</p>
                    </div>
                  </a>
                </div>`
            ).join('');
          }
        //);

        const customInfiniteHits = connectInfiniteHits(
          renderInfiniteHits
        )

        instantSearch.addWidgets([
          searchBox({
            container: "#searchbox",
            searchAsYouType: true//(page.isTouchDevice) ? false : true,
          }),

          infiniteHits({
            container: document.querySelector('#searchresults'),
            templates: {
              item: (hit, { html, components }) => html`
              <div class="search-hit-item post-thumb style-tiny" data-uuid="${hit.objectID}">
                <a class="wrapper" href="${hit.url}">
                  <figure class="thumb">
                    <img class="lazyload" data-src="${hit.thumbSrc}"/>
                  </figure>
                  <div>
                    <h3><div>${components.Highlight({ hit, attribute: 'category' })}: </div> ${components.Highlight({ hit, attribute: 'title' })}</h3>
                    <p>${components.Highlight({ hit, attribute: 'tags' })}</p>
                  </div>
                </a>
              </div>
            `,
            },
          }),
          refinementList({
            container: '#filter-tags',
            attribute: 'tags',
            limit: 1000
          })
        ]);

        instantSearch.start();

        document.querySelector('.ais-SearchBox-form').classList.add('is-active')
        document.querySelector('.ais-SearchBox-form').name = 'Search'
        document.querySelector('.ais-SearchBox-form').id = 'search'

        document.querySelector('#filter-tags').addEventListener('click', () => {
          document.querySelector('.ais-RefinementList').scrollTo({
            left: 0,
            behavior: 'smooth'
          })
        })


        let showMoreButtonObserver = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.click()
            }
          });
        })

        setInterval(() => {
          let loadMoreButton = document.querySelector('.ais-InfiniteHits-loadMore')
          if (loadMoreButton) {
            showMoreButtonObserver.observe(loadMoreButton)
          }
        }, 1000);
        

        
    }
	}
  
  document.documentElement.classList.add('page-loaded')
  page.loaded = true
  init()

  if (page.cookieNotice && getCookie('ranm-cn-accepted') !== 'confirmed') {
		setTimeout(() => {
			page.cookieNotice.cr.classList.add('is-visible')
		}, 300)
		page.cookieNotice.btn.addEventListener('click', () => {
			setCookie('ranm-cn-accepted', 'confirmed', 365)
			page.cookieNotice.cr.classList.remove('is-visible')
		})
	}


}
