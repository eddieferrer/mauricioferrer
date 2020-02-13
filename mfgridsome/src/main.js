import 'bootstrap/dist/css/bootstrap.css'

// Import main css
import '~/assets/style/index.scss'

//import scripts
import $ from 'jquery';

// Import default layout so we don't need to import it to every page
import DefaultLayout from '~/layouts/Default.vue'

// The Client API can be used here. Learn more: gridsome.org/docs/client-api
export default function (Vue, { router, head, isClient }) {
  head.link.push({
    rel: 'stylesheet',
    href: 'https://fonts.googleapis.com/css?family=Raleway:400,700,800,900'
  })
  // Set default layout as a global component
  Vue.component('Layout', DefaultLayout)
}