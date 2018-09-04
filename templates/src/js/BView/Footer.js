'use strict'

/**
 * class  app.views.Footer
 * @extends  Backbone.View
 */
app.ns('app.views').Footer = app.core.View.extend({

  el: '.footer',

  events: {
    'click .ac_head': '_openFaq'
  },

  render: function () {
    app.views.Footer.__super__.render.apply(this, arguments)

    // при загрузке или ресайзе в мобайл -> инит или дестрой faq в футере
    $(window).resize(_updateFooterNav)
    $(_updateFooterNav)

    function _updateFooterNav () {
      let breakPoint = 640
      let $windowSize = $(window).width()
      let $faqInit = $('.footer--nav--heading')
      if ($windowSize > breakPoint) {
        $faqInit.removeClass('ac_head')
      } else {
        $faqInit.addClass('ac_head')
      }
    }
  },

  _openFaq: function (e) {
    let $this = $(e.currentTarget)
    let $parent = $this.closest('.ac')
    $this.next().stop().slideToggle()
    $parent.toggleClass('js_up')
  }

})
