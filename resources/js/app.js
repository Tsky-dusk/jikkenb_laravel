import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'

Vue.config.productionTip = false;

Vue.use(Vuetify);

new Vue({
  router,
  vuetify: new Vuetify({
    theme: {
      dark: false,
    },
  }),
  render: h => h(App),
}).$mount('#app');
