<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Bandera - Svi oglasi na jednom mjestu</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/main.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
		</script>
		<script>
			document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>')
		</script>
		
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<!-- admin bar -->

		<nav class="top-bar">
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<h1><a href="#">Top Bar Title </a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Administracija</span></a>
				</li>
			</ul>

			<section class="top-bar-section">
				<!-- Left Nav Section -->
				<ul class="left">
					<li class="divider"></li>
					<li class="active">
						<a href="#">Main Item 1</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">Main Item 2</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">Main Item 3</a>
					</li>
					<li class="divider"></li>
				</ul>

				<!-- Right Nav Section -->
				<ul class="right">
					<li class="divider hide-for-small"></li>
					<li>
						<a href="#">Main Item 4</a>
					</li>
					<li class="divider"></li>
					<li class="divider show-for-small"></li>
					<li class="has-form">
						<a class="button" href="#">Button!</a>
					</li>
				</ul>
			</section>
		</nav>

		<header class="row">
			<nav class="small-12 columns">
				<ul>
					<li><a href="#">Pocetna</a></li>
					<li><a href="#">Lista smjestaja</a></li>
				</ul>
			</nav>
		</header>
		
		<section class="main-content row">
			<div class="small-6 columns push-3">
				<form class="custom">
					<select>
						<option>Izaberi grad u kome studiras</option>
						<option>Sarajevo</option>
						<option>Istocno Sarajevo</option>
						<option>Banja Luka</option>
						<option>Mostar</option>
					</select>
				</form>
			</div>
			
			<div class="small-12 columns" id="map"></div>
		</section>
		
		<footer class="row">
			<div class="small-6 columns">Copyright &copy;2013 | Evolution Web Studio</div>
		</footer>
		
		</div><script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>


		<script src="js/foundation.min.js"></script>
		<!--
		<script src="js/foundation/foundation.js"></script>
		<script src="js/foundation/foundation.alerts.js"></script>
		<script src="js/foundation/foundation.clearing.js"></script>
		<script src="js/foundation/foundation.cookie.js"></script>
		<script src="js/foundation/foundation.dropdown.js"></script>
		<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.magellan.js"></script>
		<script src="js/foundation/foundation.orbit.js"></script>
		<script src="js/foundation/foundation.placeholder.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		<script src="js/foundation/foundation.section.js"></script>
		<script src="js/foundation/foundation.tooltips.js"></script>
		<script src="js/foundation/foundation.interchange.js"></script>
		-->
		<script src="js/foundation/foundation.forms.js"></script>
		<script src="js/foundation/foundation.topbar.js"></script>
		<script>
			$(document).foundation();
		</script>
		
						<script>
				$(document).ready(function() {
	   				var map = new google.maps.Map(document.getElementById('map'), {
	   					zoom: 7,
	   					center: new google.maps.LatLng(43.81399122981739, 18.565582931041718),
	   					mapTypeId: google.maps.MapTypeId.ROADMAP
		   			});
	   				var marker= new google.maps.Marker({
						position: new google.maps.LatLng(43.81399122981739, 18.565582931041718),
						map: map
					});
				});
				</script>	
		
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = '//www.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
	</body>
</html>
