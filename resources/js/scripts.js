var App = {

	/* jump to property details */

	propertyLauncher: function(){
		$('.property-list-item').hover(
			function(){
				$(this).find('[class^="item-"]').addClass('item-transparent');
			},
			function(){
				$(this).find('[class^="item-"]').removeClass('item-transparent');
			}).on('click', function(){
				window.location.href = $(this).data('href');
			});
	},

	/* owl carousel */

	vars: {
		/*owl vars*/
		time: 7, // time in seconds
		progressBar: $("<div>", { id: "progressBar" }),
		bar:  $("<div>", { id: "bar" }),
		elem: '#owl-hero',
		isPause: false,
		tick: 0,
		percentTime: 0
		/* eof owl vars */
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
			afterInit: this.progressBar,
			afterMove: this.moved,
			startDragging: this.pauseOnDragging,
			slideSpeed: 500,
			paginationSpeed: 500,
		});
	},

	progressBar: function(){
		this.vars.progressBar.append( this.vars.bar ).prependTo( this.vars.elem );
		this.vars.tick = setInterval(this.interval, 10);
	},

	interval: function(){
		if(this.vars.isPause === false){
			this.vars.percentTime += 1 / this.vars.time;
			this.vars.bar.css({ width: this.vars.percentTime + "%" });
			//if percentTime is equal or greater than 100
			if(this.vars.percentTime >= 100){
				//slide to next item
				this.vars.elem.trigger('owl.next');
			}
		}
	},

	pauseOnDragging: function(){
		this.vars.isPause = true;
	},

	moved: function(){
		clearTimeout(this.vars.tick);
	},

	/* index contact form */

	formLabelColorizer: function(){
		$('.form-control').on('focus', function(){
			$(this).parents('.form-group').find('.control-label').addClass('selected');
		});

		$('.form-control').on('blur', function(){
			$(this).parents('.form-group').find('.control-label').removeClass('selected');
		});
	},

	/* scroll to position */

	roll: function(){
		$('.roller').click(function(e) {
			e.preventDefault();
			var t = $(this.hash);
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
			$(this).css('outline','none');

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

			$(this).addClass('active');
			$('#property-list-view-switch').removeClass('active');

			if(view != "mosaic"){
				$('#property-mosaic-view').show();
				$('#property-list-view').hide();

				view = "mosaic";
			}
		});

		$('#property-list-view-switch').on('click', function(e){

			e.preventDefault();

			$(this).addClass('active');
			$('#property-mosaic-view-switch').removeClass('active');

			if(view != "list"){
				$('#property-mosaic-view').hide();
				$('#property-list-view').show();

				view = "list";
			}
		});
	}
}
