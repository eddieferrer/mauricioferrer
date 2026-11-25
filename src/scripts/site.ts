import { initMasonry } from './masonry'

declare const $: any

initMasonry()

// Same behaviour as the old layout's mounted() hook.
$('.lightbox').each(function (this: HTMLElement) {
  $(this).magnificPopup({
    delegate: 'a.project_image',
    type: 'image',
    gallery: { enabled: true }
  })
})
$('#preloader').delay(350).fadeOut('slow')
$('body').delay(350).css({ overflow: 'visible' })
