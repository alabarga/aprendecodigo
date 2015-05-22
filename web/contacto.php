<?php require 'head.php'; ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">Contacta</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Contacta con nosotros</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location.  -->
				<div id="googlemaps" class="google-map"></div>

				<div class="container">

					<div class="row">
						
						<div class="col-md-6">

							<h4 class="push-top">Póngase en <strong>contacto</strong></h4>
							<p>Dentro del Departamento de Educación del Gobierno de Navarra trabajamos para que la programación sea un instrumento de aprendizaje dentro de las aulas. Si tienes alguna duda, consulta o sugerencia estaremos encantados de recibirla. </p>

							<hr />
<!--
							<h4>Departamento de <strong>Educación Navarra</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> C/Santo Domingo S/N - 31001 Pamplona - España</li>
								<li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> (0034) XXX XX XX XX</li>
								<li><i class="fa fa-envelope"></i> <strong>Correo:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr /> -->

							

						</div>
                        <div class="col-md-6">
                            <hr />
                            <a class="img-thumbnail lightbox pull-right"	href="assets/img/consulta.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="700" src="assets/img/consulta.png">
								                    <span class="zoom"><i class="fa fa-search"></i></span>
                                                    </a>  
							
						</div>
					</div>

				</div>

			</div>


			<section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>Para <strong>ponerte en contacto </strong> con nosotros <a href="http://codigo21.educacion.navarra.es/contacto/" target="" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">haz clic aquí</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
						</div>
					</div>
				</div>
			</section>


<?php require 'footer.php'; ?>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery.appear/jquery.appear.js"></script>
		<script src="assets/vendor/jquery.easing/jquery.easing.js"></script>
		<script src="assets/vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.js"></script>
		<script src="assets/vendor/common/common.js"></script>
		<script src="assets/vendor/jquery.validation/jquery.validation.js"></script>
		<script src="assets/vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="assets/vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="assets/vendor/isotope/jquery.isotope.js"></script>
		<script src="assets/vendor/owlcarousel/owl.carousel.js"></script>
		<script src="assets/vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/js/theme.js"></script>
		
		<!-- Specific Page Vendor and Views -->
		<script src="assets/js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/js/theme.init.js"></script>
        
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
        <script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "C/Santo Domingo S/N - 31001 Pamplona",
				html: "<strong>Gobierno de Navarra</strong><br>Departamento de Educación",
				icon: {
					image: "assets/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 42.819568;
			var initLongitude = -1.645637;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: true,
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script> 
        

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-59742928-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>

	</body>
</html>

		