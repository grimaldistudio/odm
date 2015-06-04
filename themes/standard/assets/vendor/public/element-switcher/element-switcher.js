$(document).ready(function () {

  'use strict';

  /*
    @author mail@markus-falk.com
    @description flip/flop Toggle Elements
  */

  var ElementSwitcher = {
    cacheElements: function() {
      this.$body = $('body');
      this.$switch_btn = $('.switch-btn').attr('tabindex', '0').attr('aria-selected', 'false').data('switcher', 0);
      this.$switch_content = $('.switch-content').attr('aria-expanded', 'false');
    },
    init: function() {
      this.cacheElements();

     
        ElementSwitcher.bindEvents();
        ElementSwitcher.$switch_btn.trigger('elementswitcher.initialized');
      

    },
    bindEvents: function() {

      this.$switch_btn.on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        ElementSwitcher.toggleElement(this);
      });

      this.$switch_content.on('click', '.switch-close', function() {
        ElementSwitcher.reverseToggle(this);
      });

    },
    reverseToggle: function(element) {

      var
      content = $(element).closest('.switch-content'),
      link = $('[data-switch-rel=' + content.attr('id') + ']');
      link.trigger('click');

    },
    toggleElement: function(element) {

      var
      that = $(element),
      animationSpeed = that.data('animation-speed') || 0;

      // active status
      $('.active-switch')
        .removeClass('active-switch')
        .attr('aria-selected', 'false');

      // increment switcher
      that.data('switcher', that.data('switcher') + 1);

      // reset switcher to 0 for cross-clicking
      ElementSwitcher.$switch_btn.not(that).data('switcher', 0);

      // slide up all other navs
      ElementSwitcher.$switch_content.not('#' + that.data('switch-rel'))
        .attr('aria-expanded', 'false')
        .slideUp(animationSpeed);

      // create target element
      var $target = $('#' + that.data('switch-rel'));

      // decide wether to slide up or down upon switcher value
      if(that.data('switcher') % 2 === 1) {

        that
          .attr('aria-selected', 'true')
          .addClass('active-switch');

        $target
          .attr('aria-expanded', 'true')
          .slideDown(animationSpeed, function() {
            that.trigger('elementswitcher.opened', [that, $target]);
          });

      } else {
        that.attr('aria-selected', 'false');

        $target
          .attr('aria-expanded', 'false')
          .slideUp(animationSpeed, function() {
            that.trigger('elementswitcher.closed', [that, $target]);
          });
      }

    },
    hideAllElements: function() {
      // Find open Element and close it
      ElementSwitcher.$switch_btn.each(function() {

        var that = $(this);

        if($(this).data('switcher') % 2 === 1) {
          that.trigger('click');
          ElementSwitcher.$switch_btn.data('switcher', 0);
          return false;
        }

      });

    }
  };

  ElementSwitcher.init();

});
