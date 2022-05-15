// $(() => {
// 	let stickyTop = 0,
// 		scrollTarget = false
	
// 	let timeline = $('.timeline__nav'),
// 		items = $('li', timeline),
// 		milestones = $('.timeline__section .milestone'),
// 		offsetTop = parseInt(timeline.css('top'))

// 	const TIMELINE_VALUES = {
// 		start: 190,
// 		step: 30
// 	}

// 	$(window).resize(function () {
// 		timeline.removeClass('fixed')

// 		stickyTop = timeline.offset().top - offsetTop

// 		$(window).trigger('scroll')
// 	}).trigger('resize')

// 	$(window).scroll(function () {
// 		if ($(window).scrollTop() > stickyTop) {
// 			timeline.addClass('fixed')
// 		} else {
// 			timeline.removeClass('fixed')
// 		}
// 	}).trigger('scroll')

// 	items.find('span').click(function () {
// 		let li = $(this).parent(),
// 			index = li.index(),
// 			milestone = milestones.eq(index)

// 		if (! li.hasClass('active') && milestone.length) {
// 			scrollTarget = index

// 			let scrollTargetTop = milestone.offset().top - 80

// 			$('html, body').animate({ scrollTop: scrollTargetTop }, {
// 				duration: 400,
// 				complete: function complete() {
// 					scrollTarget = false
// 				}
// 			})
// 		}
// 	})

// 	$(window).scroll(function () {
// 		let viewLine = $(window).scrollTop() + $(window).height() / 3,
// 			active = -1

// 		if (scrollTarget === false) {
// 			milestones.each(function () {
// 				if ($(this).offset().top - viewLine > 0) {
// 					return false
// 				}
				
// 				active++
// 			})
// 		} else {
// 			active = scrollTarget
// 		}

// 		timeline.css('top', -1 * active * TIMELINE_VALUES.step + TIMELINE_VALUES.start + 'px')

// 		items.filter('.active').removeClass('active')
		
// 		items.eq(active != -1 ? active : 0).addClass('active')
// 	}).trigger('scroll')
// })


(function($) {
	$.fn.timeline = function() {
	  var selectors = {
		id: $(this),
		item: $(this).find(".timeline-item"),
		activeClass: "timeline-item--active",
		img: ".timeline__img"
	  };
	  selectors.item.eq(0).addClass(selectors.activeClass);
	  var itemLength = selectors.item.length;
	  $(window).scroll(function() {
		var max, min;
		var pos = $(this).scrollTop();
		selectors.item.each(function(i) {
		  min = $(this).offset().top;
		  max = $(this).height() + $(this).offset().top;
		  var that = $(this);
		  if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
			selectors.item.removeClass(selectors.activeClass);
			selectors.item.last().addClass(selectors.activeClass);
		  } else if (pos <= max - 40 && pos >= min) {
			selectors.item.removeClass(selectors.activeClass);
			$(this).addClass(selectors.activeClass);
		  }
		});
	  });
	};
  })(jQuery);
  
  $("#timeline-1").timeline();
  