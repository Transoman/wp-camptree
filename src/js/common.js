'use strict';

global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask');

jQuery(document).ready(function($) {
  // Toggle nav menu
  let toggleNav = function () {
    let toggle = $('.nav-toggle');
    let nav = $('.nav');
    let closeNav = $('.nav__close');
    let body = $('body');

    toggle.on('click', function (e) {
      e.preventDefault();
      nav.toggleClass('open');
      body.toggleClass('nav-open');
    });

    closeNav.on('click', function (e) {
      e.preventDefault();
      nav.removeClass('open');
      body.removeClass('nav-open');
    });
  };

  // Modal
  let initModal = function() {
    $('.modal').popup({
      transition: 'all 0.3s',
      scrolllock: true,
      onclose: function() {
        $(this).find('label.error').remove();
        $(this).find('.wpcf7-response-output').hide();
      }
    });
  };

  // Input mask
  let inputMask = function() {
    let phoneInputs = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-0000'
    };

    if (phoneInputs) {
      phoneInputs.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }
  };


  toggleNav();
  initModal();
  inputMask();

  // SVG
  svg4everybody({});
});