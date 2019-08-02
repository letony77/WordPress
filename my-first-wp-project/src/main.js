import DefaultLayout from '~/layouts/Default.vue'
require('./assets/style.css')

export default function (Vue, { head }) {
  Vue.component('Layout', DefaultLayout)
  head.link.push({
    rel: 'stylesheet',
    href: 'https://fonts.googleapis.com/css?family=Exo|Rubik&display=swap'
  })
}


