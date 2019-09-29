$(function () {
});


// service worker
/** @const */
const appOpts = {
  watchId: null,
  wakeLock: null
};

const startAmbientSensor = () => {
  if ('AmbientLightSensor' in window) {
    navigator.permissions.query({ name: 'ambient-light-sensor' })
      .then(result => {
        if (result.state === 'denied') {
          return;
        }
        const sensor = new AmbientLightSensor({frequency: 0.25});
        sensor.addEventListener('reading', () => {
          if (sensor['illuminance'] < 3 && !appOpts.dom.body.classList.contains('dark')) {
            appOpts.dom.body.classList.toggle('dark');
          } else if (sensor['illuminance'] > 3 && appOpts.dom.body.classList.contains('dark')) {
            appOpts.dom.body.classList.toggle('dark');
          };
        });
        sensor.start();
    });
  }
}

const startWakeLock = () => {
    try {
      navigator.getWakeLock("screen").then((wakeLock) => {
        appOpts.wakeLock = wakeLock.createRequest();
      });
    } catch(error) {
    }
}
  
const parsePosition = (position) => {
    appOpts.dom.readout.textContent = Math.round(
      position.coords.speed * appOpts.readoutUnit);
};
  
const startServiceWorker = () => {
    navigator.serviceWorker.register('service-worker.js', {
      scope: './'
    });
}
  
startAmbientSensor();
startServiceWorker();