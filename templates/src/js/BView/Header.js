'use strict'

app.ns('app.views').Header = app.core.View.extend({

  el: '.header',

  events: {
    'click .burger': '_openBurger'
  },

  subView: {},

  initialize: function () {

  },

  render: function () {
    app.views.Header.__super__.render.apply(this, arguments)
  },

  _openBurger: function (e) {
    let $this = $(e.currentTarget)
    $('html').toggleClass('__HTMLnoscroll')
    $this.toggleClass('active')
    $('.header__popup--inner').html('')
    $('.header__popup').fadeToggle()
    $('.header--nav, .header--option').clone().appendTo('.header__popup--inner')
  }
})
