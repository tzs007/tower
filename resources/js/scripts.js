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

	owl: function(){
		$(".owl-carousel").owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			navText: [
				'<div class="icon-container"><i class="icon icon-arrow-left"></i></div>',
				'<div class="icon-container"><i class="icon icon-arrow-right"></i></div>'
			],
			responsive:{
				0:{
					items:1
				}
			}
		});
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

	showMapAndForm: function(){
		$('#btn-contact').on('click', function(e){
			e.preventDefault();
			$(this).css('outline','none');

			$('.sales-map').animate({
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
