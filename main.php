
<html>
<head>
	<title>HomeShine</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
		width:100%;
      }
      #map {
        height: 100%;
      }
    </style>
	
</head>
<!--body start from here-->
<body>
		<!-- navigation bar start-->
	
		<ul class="navbar navbar-default navbar-fixed-top " role="navigation">
			<div class="container-fluid">
			<!--toggle menu-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand active"  href="main.php">HomeShine</a>
			</div>	
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				
				<li ><a href="#content">Our Work</a> </li>
				<li ><a href="#maps">Branches in India</a> </li>
				
			</ul>
				<!-- login and sign up-->
				<form class="navbar-form navbar-right">
				<b>Register Yourself </b><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModel2"><span class=" glyphicon glyphicon-user"></span></button>
				</form>
		</div>
			</div>
		

	</ul>	
	

<!-- navigation bar end-->
	
<!-- slider start from here-->

	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
	<!--wrapper for the slide-->		
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="cover" src="img/5.jpg"></img>
					<div class="carousel-caption"></div>
				</div>
				<div class="item ">
					<img class="cover" src="img/4.jpg"></img>
					<div class="carousel-caption"></div>
				</div>
				<div class="item ">
					<img class="cover" src="img/3.jpg"></img>
					<div class="carousel-caption"></div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	<!--slider end-->
	
<!--story content start--> 	
<div id="content" >
	<div class="alert alert-success role="alert">Help those who really need</div>
		<div role="tabpanel" >
		<!--category list-->
			<ul class="nav nav-pills nav-justified lol" role="tablist">
				<li role="presentation" class="active" ><a href="#fun" aria-controles="fun" role="tab" data-toggle="tab" >How we help people</a>
				</li>
				<li role="presentation" ><a href="#comedy" aria-controles="comedy" role="tab" data-toggle="tab">Education for everyone</a>
				</li>
				<li role="presentation" ><a href="#adventure" aria-controles="adventure" role="tab" data-toggle="tab">Woman empowerment</a>
				</li>
			</ul>
			<hr>
			<!--content of categories-->
				<div class="tab-content">
				<!--first category-->
					<div role="tabpanel" class="tab-pane active " id="fun" >
						<div class="media">
							<div class="media-body">
								<h4 class="media-heading blog-header">About HomeShine</h4>
								<p class="big4">
									HomeShine is a non-profit organization.
									The motto of the foundation is education and empowerment for the less privileged areas 
									through integrated methods by initiating and implementing a progressive change in the country. 
									Currently, the foundation's focus is on girl child education and grooming skills in India.
									Girl child education has been a prime necessity in our country to break the barrier of inequality in educational system. 
								</p>
							<br/>
							</div>	
						</div>
					</div>
							
						<div role="tabpanel" class="tab-pane fade" id="comedy" >
							<div class="media">
							<div class="media-body">
								<h4 class="media-heading blog-header">Education for everyone</h4>
								<p class="big4">
									 Expanding and improving comprehensive early childhood care and education,
									 especially for the most vulnerable children.
									<img class="help" src="img/education.jpg"></img>
								</p>
							<br/>
							</div>	
							</div>
						</div>	
					
					<!-- third category-->
						<div role="tabpanel" class="tab-pane fade " id="adventure" >
							<div class="media">
							<div class="media-body">
								<h4 class="media-heading blog-header">Woman empowerment</h4>
								<p class="big4">
									 Women are equally competent. Nowadays, women are even ahead of men in many socio-economic activities.
									 <img class="help" src="img/empow.jpg"></img>
								</p>
							<br/>
							</div>	
							</div>
						</div>
				</div>
		</div>
</div>	

<div id="maps" class="container">
	<div class="alert alert-success role="alert">Our Branches in India</div>	
			<div id="map"></div>
</div>
<div class="social-page container">
	<ul id="soso">
		<li><a href="#" target="_blank" ><img class="grp" src="img/facebook.png"></img></a></li>
		<li><a href="#" target="_blank" ><img class="grp" src="img/g+.png"></img></a></li>
		<li><a href="#" target="_blank" ><img class="grp" src="img/twitter.png"></img></a></li>
	</ul>
	<div id="address">
		<b id="highlight">Address:</b><br>
			<p>
			Meerut City<br>
			Uttar Pradesh,India<br>
			</p>
		<b id="highlight">Contact No:</b><br>
			9548161163<br>
			7830963823
		
	</div>
</div>


</div>
<!-- popup for sign up -->
<div class="modal fade" id="myModel2" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
				<h4 class="modal-title">Register Here</h4>
			</div>
			<div class="modal-body">
				<!-- login form start-->
			<form action="register.php" method="post" >
					<div class="input-group input-group-lg ">
						<span class="input-group-addon">Name</span>
						<input type="text" class="form-control" name="name" type="text" required></input>
					</div>
					<br/>
					<div class="input-group input-group-lg ">
						<span class="input-group-addon">Email ID</span>
						<input class="form-control" name="email" type="email" required></input>
					</div>
					<br/>
					<div class="input-group input-group-lg ">
						<span class="input-group-addon">Mobile no</span>
						<input class="form-control" name="mobile" type="number" required></input>
					</div><br>
				<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
				<input type="submit" class="btn btn-success" value="Submit"></input>
			</form>
			</div>		
		</div>
	</div>
</div>
 <script>

      // The following example creates complex markers to indicate beaches near
      // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
      // to the base of the flagpole.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 20.5937, lng: 78.9629}
        });

        setMarkers(map);
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
      var beaches = [
		/*['Delhi', 28.613939, 77.209021, 2] //Delhi
		['Uttar Pradesh', 27.568021, 80.095220, 3] //Uttar Pradesh
		['Uttarakhand', 29.532694, 79.199822, 4] //Uttarakhand
		['Tamilnadu', 11.127123, 78.656894, 5] //Tamilnadu
		['Rajasthan', 26.841344, 72.708576, 7], //Rajasthan
		['Punjab', 31.147130, 75.341218, 6], //Punjab*/
        ['Maharastra', 19.751480, 75.713888, 4], //maharastra
        ['Madhya pradesh', 22.973423, 78.656894, 5], //madhya pradesh
        ['Haryana', 29.058776, 76.085601, 3], //haryana
        ['Gujrat', 22.258652, 71.192381, 2], //gujrat
        ['Bihar', 25.096074, 85.313119, 1] //bihar
      ];

      function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
          });
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv5TYX1_7SGUXWuu4_3ZgvAC_y3iwCxPw&callback=initMap">
    </script>	
<script  src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>