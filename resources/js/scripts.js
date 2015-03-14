function logged(){
	console.log('afterInit');
}

var App = {

	/* jump to property details */

	propertyLauncher: function(){
		$('.property-list-item').hover(
			function(){
				$(App).find('[class^="item-"]').addClass('item-transparent');
			},
			function(){
				$(App).find('[class^="item-"]').removeClass('item-transparent');
			}).on('click', function(){
				window.location.href = $(App).data('href');
			});
	},

	/* owl carousel */
	vars: {
		time: 5,
		tick: 0,
		percentTime: 0,
		isPause: false
	},

	owl: function(){

		$(".owl-carousel").owlCarousel({
			loop: true,
			margin: 0,
			nav: true,
			navText: [
				'<div class="icon-container"><i class="icon icon-arrow-left"></i></div>',
				'<div class="icon-container"><i class="icon icon-arrow-right"></i></div>'
			],
			responsive:{
				0: {
					items: 1
				}
			},
			onInitialized: App.progressBar,
			onTranslated: App.moved,
			onDragged: App.pauseOnDragging,
		});
	},

	start: function(){
		App.vars.tick = setInterval(App.interval, 10);
	},

	progressBar: function(){
		var $progressBar = $("<div>", { id: 'progressBar' }),
			$bar = $("<div>", { id: 'bar' }),
			$elem = $('#owl-hero');

		$progressBar.append( $bar ).prependTo( $elem );
		App.start();
	},

	interval: function(){
		if(App.vars.isPause === false){
			App.vars.percentTime += 1 / App.vars.time;
			$('#bar').css({ width: App.vars.percentTime + "%" });

			//if percentTime is equal or greater than 100
			if(App.vars.percentTime >= 100){
				//slide to next item
				var owl = $('.owl-carousel');
				owl.owlCarousel();
				owl.trigger('next.owl.carousel'); // ????? ménem indulsz köcsög????
			}
		}
	},

	pauseOnDragging: function(){
		App.vars.isPause = true;
	},

	moved: function(){
		clearTimeout(App.vars.tick);
		App.start();
	},

	/* index contact form */

	formLabelColorizer: function(){
		$('.form-control').on('focus', function(){
			$(App).parents('.form-group').find('.control-label').addClass('selected');
		});

		$('.form-control').on('blur', function(){
			$(App).parents('.form-group').find('.control-label').removeClass('selected');
		});
	},

	/* scroll to position */

	roll: function(){
		$('.roller').click(function(e) {
			e.preventDefault();
			var t = $(App.hash);
			if(t){
				var n = t.offset().top - 130;
				$('html, body').animate({
					scrollTop: n
				}, 500);
			}
		});
	},

	/* property page animations */

	showMapAndForm: function(map){
		$('#btn-contact').on('click', function(e){
			e.preventDefault();
			$(App).css('outline','none');

			$('#animated-map').animate({
				marginTop: "0"
			}, {
				duration: 500,
				easing: 'easeOutQuint'
			});

			$('.hidden-form').delay(100).animate({
				top: "-410"
			}, {
				duration: 700,
				easing: 'easeOutBack'
			});
			return false;
		});
	},

	/* gallery opener */

	showFullGallery: function(){
		$('#btn-gallery').on('click', function(e){
			e.preventDefault();

			$('#full-gallery').slideToggle();
		})
	},

	/* gallery opener */

	showAllRelatedProperties: function(){
		$('#btn-related-properties').on('click', function(e){
			e.preventDefault();

			$('#all-related-properties').slideToggle();
		})
	},

	/* switch between property content views (list|mosaic) */

	switchView: function(){
		var view = "mosaic";

		$('#property-mosaic-view-switch').on('click', function(e){

			e.preventDefault();

			$(App).addClass('active');
			$('#property-list-view-switch').removeClass('active');

			if(view != "mosaic"){
				$('#property-mosaic-view').show();
				$('#property-list-view').hide();

				view = "mosaic";
			}
		});

		$('#property-list-view-switch').on('click', function(e){

			e.preventDefault();

			$(App).addClass('active');
			$('#property-mosaic-view-switch').removeClass('active');

			if(view != "list"){
				$('#property-mosaic-view').hide();
				$('#property-list-view').show();

				view = "list";
			}
		});
	}
}
