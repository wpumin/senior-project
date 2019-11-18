const VERSION =  new Date().getTime()
const CACHE_KEY = `bearbus-cache-external-v${VERSION}`
const assetsToCache = [
  // ! general 
  '/manifest.json',
  // images
  '/images/bearbus72.png',
  '/images/bearbus96.png',
  '/images/bearbus144.png',
  '/images/bearbus168.png',
  '/images/bearbus192.png',
  '/images/bearbus512.png',
  // ! external
  // all
  '/',
  // images
  '/images/bearbus.png',
  '/images/login/logo-white.png',
  '/images/login/bg-login.png',
  '/images/login/bg-login2.png',
  // css external
  '/css/external/style.css?v=1.0.0.3',
  // fonts
  '/fonts/kanit/kanit-regular.woff2',
  // js
  '/js/external/jquery-3.4.1.min.js',
  '/js/external/main.js',
  // plugins
  '/plugins/bootstrap/bootstrap_external.min.css',
  '/plugins/bootstrap/popper_external.min.js',
  '/plugins/bootstrap/bootstrap_external.min.js',
  '/plugins/wow/animate.css',
  '/plugins/wow/wow.min.js',
  // ! public
  // css, js, fonts and plugins
  '/css/public/animate.min.css',
  '/css/public/bootstrap.min.css',
  '/css/public/color1.css',
  '/css/public/font-awesome.min.css',
  '/css/public/owl.carousel.min.css',
  '/css/public/owl.theme.default.min.css',
  '/css/public/swiper.min.css',
  '/fonts/public/fontawesome-webfont.woff2',
  '/js/public/bootstrap.min.js',
  '/js/public/jquery-3.3.1.min.js',
  '/js/public/owl.carousel.min.js',
  '/js/public/popper.min.js',
  '/js/public/script.js',
  '/js/public/scroll.js',
  '/js/public/slider.js',
  '/js/public/swiper.min.js',
  '/js/public/tilt.jquery.js',
  // images
  '/images/public/favicon.png',
  '/images/public/1.jpg',
  '/images/public/1.png',
  '/images/public/2.jpg',
  '/images/public/3.jpg',
  '/images/public/app1.png',
  '/images/public/app2.png',
  '/images/public/faq.png',
  '/images/public/feature-mob.png',
  '/images/public/logo.png',
  '/images/public/ss/1.png',
  '/images/public/ss/2.png',
  '/images/public/ss/3.png',
  '/images/public/ss/4.png',
  '/images/public/ss/5.png',
  '/images/public/ss/6.png',
  '/images/public/testimonial.jpg',
  '/images/public/top-mobile.png',
  '/images/public/top1.png',
  '/images/public/top2.png',
  '/images/public/top3.png',
  '/images/public/top4.png',
  '/images/public/top5.png',
]

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_KEY)
      .then(cache => cache.addAll(assetsToCache))
  )
})

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(cacheResp => {
      return cacheResp || fetch(event.request).then(response => {
        return caches.open(CACHE_KEY).then(cache => {
          cache.put(event.request, response.clone())
          return response
        })
      })
    })
  )
})

self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_KEY]

  event.waitUntil(
    caches.keys().then(keyList => {
      return Promise.all(keyList.map(function(key) {
        if (cacheWhitelist.indexOf(key) === -1) {
          return caches.delete(key)
        }
      }))
    })
  )
  return self.clients.claim()
})