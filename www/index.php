<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" ng-app="myProject" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head itemscope itemtype="http://schema.org/Article">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Boilerplate</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta property="og:description" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=".jpg"/>
	<link itemprop="image" href=".jpg">
	<meta property="og:type" content="website"/>
	<meta property="og:title" content=""/>
	<meta property="og:site_name" content=""/>
	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="theme-color" content="#000000">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Preloader -->
	<script type="text/javascript">
		$(window).load(function(){
			// Remove Preloader
			$('.preloader').fadeOut();
		});
	</script>

	<script src="js/lib/angular/angular.min.js"></script>
	<script src="js/lib/angular/angular-route.min.js"></script>
	<script src="js/lib/angular/angular-animate.min.js"></script>
	<script src="js/lib/angular/angular-touch.min.js"></script>
	<script src="js/lib/modernizr-custom-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/0.4.2/mobile-detect.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/0.4.2/mobile-detect-modernizr.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.min.css">
</head>
<body>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="preloader">
		<div class="container">
			<!-- Insert preloader content here -->
		</div>
	</div>
	<!-- END PRELOADER -->

	<div id="content-container">
		<!-- Global Nav-->
		<header>
			<a href="#/">Home</a>
			<a href="#/story">Story</a>
			<a href="#/gallery">Gallery</a>
			<a href="#/trailer">Trailer</a>
		</header>

		<!-- Page Content -->
		<div class="main" ng-view>
			<!-- Page content gets inserted here -->
		</div>
	</div>
	
	<script type="text/javascript" src="js/main.min.js"></script>
	<script type="text/javascript">
		// Dynamic Live reloading
		// Only loads if ran in local environment
		var domainName = window.location.hostname;
		var finalDomainName = domainName.toLowerCase();
		var s = document.createElement("script");

		if( finalDomainName === "localhost" ){
			s.src = "http://localhost:35729/livereload.js";
			document.body.appendChild(s);
			console.log("DEV channel = " + finalDomainName);
		}else{
			console.log("PROD channel = " + finalDomainName);
		}
	</script>
</body>
</html>