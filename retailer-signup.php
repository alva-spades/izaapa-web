<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <div class="container" style="">
   <center>
       <div class="card">   <div class="card-body">
    <h1>Login As admin</h1>
    <form method="post"  action="retailerAccountLoginHandler.php">
										<div class="col-md-9 col-lg-6">				
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="text"name="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="text" name="email" class="form-control" placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">@gmail.com</span>
													</div>
												</div>
											</div>	
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="text" name="shop_name" class="form-control" placeholder="Shop Name" aria-label="Shop Name" aria-describedby="basic-addon1">
												</div>
											</div>                                            		
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="password" name="password" class="form-control" placeholder="**********" aria-label="Password" aria-describedby="basic-addon1">
												</div>
											</div>	
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="text" name="shop_location" class="form-control" placeholder="Enter Shop Address or Select on Map" aria-label="Username" aria-describedby="basic-addon1">
												</div>
											</div>
<div class="mapcontainer">
	<div id="map-example" class="vmap" style="float:right; height: 450px"></div>
</div>

                                            <div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
                                           
                                            <button class="btn"> Create Account</button>
										</div>
                                        </div>

                                        
                                        
</div>
											
         
    </div>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
    <script>
		$('#map-example').vectorMap(
		{
			map: 'world_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderWidth: 2,
			color: '#e4e4e4',
			enableZoom: true,
			hoverColor: '#35cd3a',
			hoverOpacity: null,
			normalizeFunction: 'linear',
			scaleColors: ['#b6d6ff', '#005ace'],
			selectedColor: '#35cd3a',
			selectedRegions: ['ID', 'RU', 'US', 'AU'],
			showTooltip: true,
			onRegionClick: function(element, code, region)
			{
				return false;
			},
			onResize: function (element, width, height) {
				console.log('Map Size: ' +  width + 'x' +  height);
			},
		});
	</script>

 
</body>
</html>