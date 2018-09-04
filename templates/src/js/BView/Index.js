app.ns('app.views').Index = app.core.Page.extend({

  events: {
  },

  behaviors: [
    // 'Behavior1'
  ],

  subView: {
    // subView1: 'subView1'
  },

  initialize: function () {
    app.views.Index.__super__.initialize.apply(this, arguments)
  },

  remove: function () {
    app.views.Index.__super__.remove.apply(this, arguments)
  },

  render: function () {
    app.views.Index.__super__.render.apply(this, arguments)

    app.views.Index.__super__.afterRender.apply(this, arguments)

    // при загрузке или ресайзе в мобайл -> инит или дестрой слайдера
    $(window).resize(_updateslider)
    $(_updateslider)

    function _updateslider () {
      let breakPoint = 1024
      let $windowSize = $(window).width()
      if ($windowSize > breakPoint) {
        $('.object--feed--wrapper').slick('unslick')
        console.log('destroy')
      } else {
        console.log('build')
        $('.object--feed--wrapper').slick({
          slidesToShow: 4,
          dots: false,
          arrows: false,
          speed: 500,
          infinite: false,
          variableWidth: false,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                variableWidth: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                variableWidth: false,
                dots: true,
                infinite: true
              }
            }
          ]
        })
      }
    }
  }

})
