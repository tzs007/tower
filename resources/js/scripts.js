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

	/* load gmap */

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

	/* scroll to */

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
	}

}
