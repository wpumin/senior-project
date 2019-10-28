const VERSION =  new Date().getTime()
const CACHE_KEY = `bearbus-cache-external-v${VERSION}`
const assetsToCache = [
  // all
  '/',
  // images
  '/images/bearbus.png',
  '/images/login/logo-white.png',
  '/images/login/bg-login.png',
  '/images/login/bg-login2.png',
  // css
  '/css/external/style.css?v=1.0.0.2',
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