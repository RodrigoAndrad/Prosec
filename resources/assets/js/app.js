require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
import VueCkeditor from 'vue-ckeditor2';


Vue.use(Buefy, { defaultIconPack: 'fa' });
Vue.use(VueCkeditor);

Vue.component('text-input-component', require('./components/TextInputComponent.vue'));
Vue.component('text-area-input-component', require('./components/TextAreaInputComponent.vue'));
Vue.component('seo-tags-component', require('./components/SeoTagsComponent.vue'));
Vue.component('slide-switch-component', require('./components/SlideSwitchComponent.vue'));
Vue.component('slide-component', require('./components/SlideComponent.vue'));
Vue.component('banner-slide-component-new', require('./components/BannerSlideComponentNew.vue'));
Vue.component('highlight-component', require('./components/HighlightComponent.vue'));
Vue.component('homepage-box-component', require('./components/HomepageBoxComponent.vue'));
Vue.component('news-component', require('./components/NewsComponent.vue'));
Vue.component('leads-component', require('./components/LeadsComponent.vue'));
Vue.component('video-youtube-component', require('./components/VideoYoutubeComponent.vue'));

require ('./manage')
