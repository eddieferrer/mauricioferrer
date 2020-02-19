<template>
  <div id="app">
    <!-- preloader -->
    <div id="preloader">
        <div class="spinner spinner-round"></div>
    </div>
    <!-- / preloader -->

    <!-- header -->
    <header>
      <NavigationMenu/>
      <slot name="header"></slot>
    </header>
    <!-- / header -->

    <!-- content -->
    <main class="main">
      <slot name="content"></slot>
    </main>
    <!-- / content -->

    <!-- footer -->
    <footer>
        <div class="container">
            <p class="footer-info">© MAURICIO FERRER</p>
        </div><!-- / container -->
    </footer>
    <!-- / footer -->
  </div>
</template>

<script>
import NavigationMenu from '~/components/NavigationMenu.vue'

export default {
  props: {
  },
  metaInfo: {
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { name: 'description', content: 'Mauricio Ferrer - RA, LEED AP' },
      { name: 'keywords', content: 'Mauricio Ferrer' },
      { name: 'author', content: 'Mauricio Ferrer' },
    ]
  },
  components: {
    NavigationMenu
  },
  mounted () {
    window.$ = require('jquery');
    window.jQuery = require('jquery')

    require('~/assets/js/bootstrap.min.js')
    require('~/assets/js/jquery.easing.min.js')

    require('~/assets/js/jquery.magnific-popup.min.js');
    $('.lightbox').each(function() {
        $(this).magnificPopup({
            delegate: 'a.project_image', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            }
        });
    });
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({'overflow':'visible'});
  },
}
</script>

<style lang="scss">
</style>
