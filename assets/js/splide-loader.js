(function () {
  var SPLIDE_SRC = 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js';
  var loading = null;

  function inject() {
    return new Promise(function (resolve, reject) {
      var script = document.createElement('script');
      script.src = SPLIDE_SRC;
      script.async = true;
      script.onload = function () {
        resolve(window.Splide);
      };
      script.onerror = function (err) {
        loading = null;
        reject(err);
      };
      document.head.appendChild(script);
    });
  }

  window.loadSplide = function () {
    if (typeof window.Splide === 'function') {
      return Promise.resolve(window.Splide);
    }
    if (loading) {
      return loading;
    }
    loading = inject();
    return loading;
  };
})();
