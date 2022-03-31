const staticCacheName = 'site-static';
const dynamicCache = 'site-dynamic';
const assets = [
    '/',
    '/index.php',
    '/scripts/app.js'
    
];
//installer le service worker
self.addEventListener('install', evt => {
    //console.log('service worker has been installed');
    evt.waitUntil(
    caches.open(staticCacheName).then(cache => {
        console.log('caching shel assets')
        cache.addAll(assets);
    })
    );
});

//Pour l'activer
self.addEventListener('activate', evt => {
    //console.log('service worker has been activated')
    evt.waitUntil(
        caches.keys().then(keys =>{
            //console.log(keys);
            return Promise.all(keys
                .filter(key => key !== staticCacheName)
                .map(key => caches.delete(key)))
        })
    );
    });

//fetch
self.addEventListener('fetch', evt =>{
//console.log('fetch event', evt);
evt.respondWith(
    caches.match(evt.request).then(cacheRes => {
        return cacheRes || fetch(evt.request).then(fetchRes => {
            return caches.open(dynamicCache).then(cache => {
                cache.put(evt.request.url, fetchRes.clone());
                return fetchRes;
            })
        });
    })
);
});