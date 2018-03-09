//$('.page-template-default .post-header').fullRow( {layout:'pad'} );
//$('.post-map').fullRow({layout:'full'});

$(function() {
    jQuery.fn.extend({
        fullRow: function (options) {
            var defaults = {
                base: 'body',
                layout: 'pad'
            };
            var width = $('body').width();
            var thisElement = this;
            options = $.extend(defaults, options);
            this.each(function() {
                var value = $(this).position().left - $( options.base ).position().left;
                if (options.layout == 'pad') {
                    $(this).css({
                        'width': width,
                        'margin-left': -value,
                        'margin-right': -value,
                        'padding-left': value,
                        'padding-right': value
                    });
                } else {
                    $(this).css({
                        'width': width,
                        'margin-left': -value,
                        'margin-right': -value
                    });
                }
            });
            $(window).resize(function() {
                $(thisElement).fullRow();
            }).bind('orientationchange', function() {
                $(thisElement).fullRow();
            });
        return this;
        }
    });
});
