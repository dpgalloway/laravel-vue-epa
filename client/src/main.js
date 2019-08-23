import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import App from './App.vue';
import router from './router';
import store from './store';

// Import USDWS styles
import '../node_modules/uswds/dist/scss/uswds.scss';

// Axios default base URL - points to Laravel server
axios.defaults.baseURL = process.env.API_URL;

Vue.config.productionTip = false;

Vue.use(VueAxios, axios);
Vue.axios.defaults.baseURL =
  process.env.NODE_ENV === 'production' ? window.location.origin : process.env.VUE_APP_API_URL;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount('#app');
