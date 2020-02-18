<!DOCTYPE HTML>

<html>
    @include('head')
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					@include('header')
				<!-- Thumbnail -->
                    @include('thumbnail')
                <!-- Footer -->
                    @include('footer')
			</div>
		<!-- Scripts -->
			<script src="click-master/assets/js/jquery.min.js"></script>
			<script src="click-master/assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="click-master/assets/js/main.js"></script>
			<script type="text/javascript">
			 $('.toggle').click(function(){
			 	$('.caption').toggle();
			 })
			</script>
	</body>
</html>