;
(function($) {
	$.fn.extend({
		zpSlide: function(obj) {
			options = {
				original: 1,
				xs: 2,
				sm: 3,
				md: 4,
				lg: 5,
				autoPlay: true,
				intervalTime: 3000
			};
			$.extend(options, obj);
			var ts = this,
				l = ts.find('li').length;
			var timer;
			timer = doing();
			$(window).on('resize', function() {
				clearInterval(timer);
				timer = doing();
			})

			function doing() {
				var ow = ts.width(),
					n = options.original,
					w = ow / n;
				if(ow > 1279) {
					n = options.lg;
					w = ow / n
				} else if(ow > 1023) {
					n = options.md;
					w = ow / n
				} else if(ow > 767) {
					n = options.sm;
					w = ow / n
				} else if(ow > 639) {
					n = options.xs;
					w = ow / n
				}
				lt = ts.find('.zp-slide-left'), rt = ts.find('.zp-slide-right'), move = 0;
				ts.find('li').css('width', w + 'px');
				lt.on('click', function() {
					move += w;
					if(move > 1) move = -w * (l - n);
					ts.find('ul').css('transform', 'translate3d(' + move + 'px, 0px, 0px)');
				})
				rt.on('click', function() {
					move -= w;
					if(-move > w * (l - n)) move = 0;
					ts.find('ul').css('transform', 'translate3d(' + move + 'px, 0px, 0px)');
				})
				if(options.autoPlay)
					return timer = setInterval(function() {
						rt.click();
					}, options.intervalTime)
			}
		}
	})
})(jQuery);