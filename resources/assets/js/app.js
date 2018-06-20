require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy, { defaultIconPack: 'fa' });

Vue.component('text-input-component', require('./components/TextInputComponent.vue'));
Vue.component('text-area-input-component', require('./components/TextAreaInputComponent.vue'));
Vue.component('seo-tags-component', require('./components/SeoTagsComponent.vue'));
Vue.component('slide-switch-component', require('./components/SlideSwitchComponent.vue'));
Vue.component('slide-component', require('./components/SlideComponent.vue'));
Vue.component('banner-slide-component-new', require('./components/BannerSlideComponentNew.vue'));
// Vue.component('banner-slide-component', require('./components/BannerSlideComponent.vue'));
Vue.component('homepage-box-component', require('./components/HomepageBoxComponent.vue'));
require ('./manage')
