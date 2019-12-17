'use strict';

global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask'),
  fancybox = require('@fancyapps/fancybox'),
  Swiper = require('swiper');

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

  // Slider
  new Swiper('.reviews-slider', {
    spaceBetween: 30,
    speed: 0,
    navigation: {
      nextEl: '.reviews .swiper-button-next',
      prevEl: '.reviews .swiper-button-prev',
    },
    breakpoints: {
      993: {
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        spaceBetween: 70,
      }
    }
  });

  // Accordion
  let accordion = function(item) {
    let el = $(item);
    let elTitle = el.find('h3');
    let content = elTitle.next();

    el.find('.active').find(content).slideDown(500);

    elTitle.click(function() {
      if ($(this).parent().hasClass('active')) {
        $(this).parent().removeClass('active');
        $(this).next().slideUp(500);
      }
      else {
        $(this).parent().addClass('active');
        content.not($(this).next()).slideUp(500);
        elTitle.not($(this)).parent().removeClass('active');
        $(this).next().slideDown(500);
      }
    });
  };


  toggleNav();
  initModal();
  inputMask();
  accordion('.faq-list');

  // SVG
  svg4everybody({});
});