const version = 2019221001;
const cachePrefix = 'bearbus-external-';
const staticCacheName = `${cachePrefix}static-${version}`;
const expectedCaches = [staticCacheName];

addEventListener('install', event => {
  event.waitUntil((async () => {
    const cache = await caches.open(staticCacheName);

    await cache.addAll([
      // all
      '/',
      // images
      '/images/bearbus.png',
      '/images/login/logo-white.png',
      '/images/login/bg-login.png',
      '/images/login/bg-login2.png',
      // css
      '/css/external/style.css',
      // fonts
      '/fonts/kanit/kanit-regular.ttf',
      // js
      '/js/external/jquery-3.4.1.min.js',
      '/js/external/main.js',
      // plugins
      '/plugins/bootstrap/bootstrap_external.min.css',
      '/plugins/bootstrap/popper_external.min.js',
      '/plugins/bootstrap/bootstrap_external.min.js',
      '/plugins/wow/animate.css',
      '/plugins/wow/wow.min.js',
    ]);

    self.skipWaiting();
  })());
});

addEventListener('activate', event => {
  event.waitUntil((async () => {
    for (const cacheName of await caches.keys()) {
      if (!cacheName.startsWith(cachePrefix)) continue;
      if (!expectedCaches.includes(cacheName)) await caches.delete(cacheName);
    }
  })());
});

addEventListener('fetch', event => {
  const url = new URL(event.request.url);
  event.respondWith(
    caches.match(event.request).then(r => r || fetch(event.request))
  );
});