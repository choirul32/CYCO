<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bimbingan Konseling &mdash;</title>

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('website/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('website/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('website/css/flexslider.css') }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('website/css/pricing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    @stack('css')
	<!-- Modernizr JS -->
	<script src="{{ asset('website/js/modernizr-2.6.2.min.js') }}"></script>

	</head>
	<body>
		@yield('content')

		<!-- jQuery -->
		<script src="{{ asset('website/js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset('website/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ asset('website/js/jquery.waypoints.min.js') }}"></script>
		<!-- Stellar Parallax -->
		<script src="{{ asset('website/js/jquery.stellar.min.js') }}"></script>
		<!-- Carousel -->
		<script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
		<!-- Flexslider -->
		<script src="{{ asset('website/js/jquery.flexslider-min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ asset('website/js/jquery.countTo.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('website/js/magnific-popup-options.js') }}"></script>
		<!-- Count Down -->
		<script src="{{ asset('website/js/simplyCountdown.js') }}"></script>
		<!-- Main -->
		<script src="{{ asset('website/js/main.js') }}"></script>
		<script>
		var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: false
		});
		</script>
	</body>
</html>

