@include('head')
@section('title', 'Главная')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">Contact</h1>
			
			<!-- BEGIN .breadcrumbs-wrapper -->
			<div class="breadcrumbs-wrapper clearfix">
				<ul class="breadcrumbs">
					<li><span><a href="#">Home</a></span></li>
					<li><span>Contact</span></li>
				</ul>
			</div>
			<!-- END .breadcrumbs-wrapper -->
			
			<!-- BEGIN .page-content -->
			<div class="page-content">
			
				<ul class="columns-2 clearfix">
					<li class="col2">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fringilla quam quis neque blandit nec adipiscing lectus vehicula. Ut sit amet elit ac massa hendrerit euismod id eget sem. Aenean lobortis lacus quis ipsum lobortis sagittis.</p>
					</li>

					<li class="col2">
						<div class="title-block">
							<h3>Как связаться</h3>
						</div>
						<ul class="list1">
							<li>пос. Кугеси, ул. Шоссейная, д. 3а</li>
							<li>(831) 261-39-36</li>
							<li>mag@creditcoop.ru</li>
						</ul>
					</li>
				</ul>

				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div id="google-map" style="width:100%;height:300px;"></div>
				
				<script type="text/javascript">
					
					var latlng = new google.maps.LatLng(0, 0);
					var myOptions = {
						zoom: 14,
						center: latlng,
						scrollwheel: true,
						scaleControl: false,
						disableDefaultUI: false,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					
					var map = new google.maps.Map(document.getElementById("google-map"),
						myOptions);

					    var geocoder_map = new google.maps.Geocoder();var map_address = 'пос. Кугеси, ул. Шоссейная, 3а';geocoder_map.geocode( { 'address': map_address}, function(results, status) {
							if (status == google.maps.GeocoderStatus.OK) {
								map.setCenter(results[0].geometry.location);

									var marker = new google.maps.Marker({
										map: map, 

										position: map.getCenter()
									});var contentString = "<h4>Редакция журнала</h4><p>ул. Шоссейная, д. 3а</p>";
						
										var infowindow = new google.maps.InfoWindow({
											content: contentString
										});google.maps.event.addListener(marker, 'click', function() {
									 		infowindow.open(map,marker);
										});} else {
									alert("Geocode was not successful for the following reason: " + status);
								}
					});
				</script>

				<form action="#" id="contactform" class="clearfix" method="post">

					<div class="field-row">
						<label for="contact_name">Name <span>(required)</span></label>
					    <input type="text" name="contact_name" id="contact_name" class="text_input" value="" />
					</div>

					<div class="field-row">
						<label for="email">Email <span>(required)</span></label>
						<input type="text" name="email" id="email" class="text_input" value="" />		
					</div>

					<div class="field-row">
						<label for="message_text">Message</label>
						<textarea name="message" id="message_text" class="text_input" cols="60" rows="9"></textarea>
					</div>

					<input class="button1" type="submit" value="Send Email" id="submit" name="submit">

				</form>
				
			<!-- END .page-content -->
			</div>
			
		</div>
		<!-- END #main-content -->
		
		<!-- BEGIN #sidebar-content -->
		<div id="sidebar-content">
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
			
				<ul class="adverts-four">
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
				</ul>
			
			</div>
			<!-- END .widget -->
			
@include('newsletter')
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
				
				<div class="widget-title clearfix">
					<h3>Последние новости</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
@include('popnews')
				
			</div>
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
			
				<a href="#" class="advert-side-wrapper"><img src="images/advert2.png" alt="" /></a>
			
			</div>
			<!-- END .widget -->
			
		</div>
		<!-- END #sidebar-content -->
		
	</div>
	<!-- END .content-wrapper -->
	
@include('footer')