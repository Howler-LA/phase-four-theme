import domReady from '@roots/sage/client/dom-ready';

import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

domReady(async () => {
  window.Alpine = Alpine
  Alpine.plugin(focus)
  Alpine.start()
});

if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
