require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
import VueCkeditor from 'vue-ckeditor2';

Vue.use(Buefy, { defaultIconPack: 'fa' });
Vue.use(VueCkeditor);

/*
 *	Manager Components
 */

Vue.component('text-input-component', require('./components/manage/TextInputComponent.vue'));
Vue.component('text-area-input-component', require('./components/manage/TextAreaInputComponent.vue'));

Vue.component('image-component', require('./components/manage/ImageComponent.vue'));

Vue.component('seo-tags-component', require('./components/manage/SeoTagsComponent.vue'));
Vue.component('slide-switch-component', require('./components/manage/SlideSwitchComponent.vue'));

Vue.component('slide-component', require('./components/manage/SlideComponent.vue'));
Vue.component('banner-slide-component', require('./components/manage/BannerSlideComponent.vue'));
Vue.component('highlight-component', require('./components/manage/HighlightComponent.vue'));
Vue.component('homepage-box-component', require('./components/manage/HomepageBoxComponent.vue'));
Vue.component('news-component', require('./components/manage/NewsComponent.vue'));
Vue.component('leads-component', require('./components/manage/LeadsComponent.vue'));
Vue.component('video-youtube-component', require('./components/manage/VideoYoutubeComponent.vue'));

Vue.component('servicos-box-component', require('./components/manage/ServicosBoxComponent.vue'));

Vue.component('text-box-component', require('./components/manage/TextBoxComponent.vue'));
Vue.component('link-box-component', require('./components/manage/LinkBoxComponent.vue'));
Vue.component('resp-social-box-component', require('./components/manage/RespSocialBoxComponent.vue'));
Vue.component('clientes-box-component', require('./components/manage/ClientesBoxComponent.vue'));
Vue.component('pro-acao-leads-component', require('./components/manage/ProAcaoLeadsComponent.vue'));
Vue.component('multi-image-component', require('./components/manage/MultiImageComponent.vue'));
Vue.component('image-and-thumbs-component', require('./components/manage/ImageAndThumbsComponent.vue'));

Vue.component('multi-link-box-component', require('./components/manage/MultiLinkBoxComponent.vue'));

require ('./manage')
