<head>
	<title>Tract Occasion</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="icon" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<script>
		$(document).ready(function() {
			$('.slider_wrapper')._TMS({
				show: 0,
				pauseOnHover: false,
				prevBu: '.prev',
				nextBu: '.next',
				playBu: false,
				duration: 800,
				preset: 'fade',
				pagination: true, //'.pagination',true,'<ul></ul>'
				pagNums: false,
				slideshow: 8000,
				numStatus: false,
				banners: 'fade',
				waitBannerAnimation: false,
				progressBar: false
			});
		});
		$(document).ready(function() {
			! function() {
				var map = [],
					names = [],
					win = $(window),
					header = $('header'),
					currClass
				$('.content').each(function(n) {
					map[n] = this.offsetTop
					names[n] = $(this).attr('id')
				})
				win
					.on('scroll', function() {
						var i = 0
						while (map[i++] <= win.scrollTop());
						if (currClass !== names[i - 2])
							currClass = names[i - 2]
						header.removeAttr("class").addClass(names[i - 2])
					})
			}();
		});

		function goToByScroll(id) {
			$('html,body').animate({
				scrollTop: $("#" + id).offset().top
			}, 'slow');
		}
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});

	</script>
</head>
