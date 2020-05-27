window.$ = window.jQuery = require("jquery");
require('./jquery-3.3.1.min');
require('./popper.min');
require('./bootstrap');
require('./../../node_modules/headroom.js/dist/headroom');
require('./../../node_modules/headroom.js/dist/jQuery.headroom');
require('./../../node_modules/owl.carousel/dist/owl.carousel');
require('./smoothscroll');








(function($) {
    /**
    * jQuery plugin that creates the basic interactivity for an ARIA tooltip widget
    *
    * @method "jQuery.fn.tooltip"
    * @param {Object} [options]
    * @param {string} [options.triggerSelector] - selector for trigger element
    * (default: '.tooltip__trigger, [role=tooltip]')
    * @param {string} [options.overlaySelector] - selector for overlay element
    * (default: '.tooltip__overlay, [aria-describedby]')
    * @fires {object} flyoutExpand - the tooltip flyout has expanded
    * @fires {object} flyoutCollapse - the tooltip flyout has collapsed
    * @return {jQuery} chainable jQuery class
    */
    $.fn.tooltip = function(options) {
        options = $.extend({
            overlaySelector: '.tooltip__overlay, [role=tooltip]',
            triggerSelector: '.tooltip__trigger, [aria-describedby]'
        }, options);

        return this.each(function onEach() {
            var $widget = $(this);

            var flyoutOptions = {
                expandedClass: 'tooltip--expanded',
                triggerSelector: options.triggerSelector,
                overlaySelector: options.overlaySelector
            };



            // add hook for progressive enhancement
            $widget.addClass('tooltip--js');
        });
    };
}(jQuery));


 














require('./custom');

$(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });


