<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Beautiful yellow flowers from Pixabay :)</title>
		
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		
	<script src="js/myscript.js"></script>	
	
	<link rel="stylesheet" href="css/custom.css">
	
	
</head>

<body ng-app="myGreatApp" >
<div ng-controller="myControllerSingleImage">
	<div class="container">
		<div class="row">
			 <div class="col-12" ng-repeat="x in myData">
			 	 
				 <h1>{{ x.tags }}</h1>
				 <hr>
			 </div>
		</div>
	</div>
	
	
<? // main container for images  ?>
		
			<div class="container">

				<div class="row">

					 <div class="col-sm-12 col-md-8" ng-repeat="x in myData">
							<p><img src="{{ x.largeImageURL }}" class="img-fluid"></p>
						 
						    <p ng-controller="goBack" class="text-cemter">
								<button id="prevBtn" class="btn btn-primary" ng-click="myFunction()">Go back</button>
							</p>
					 </div>
					
					 <div class="col-sm-12 col-md-4" ng-repeat="x in myData">
							<ul>
						 		<li>Photographer: <span class="info">{{ x.user }}</span></li>
								<li>Tags: <span class="info">{{ x.tags }}</span></li>
								<li>Views: <span class="info">{{ x.views }}</span></li>
								<li>Downloads: <span class="info">{{ x.downloads }}</span></li>
								<li>Size: <span class="info">{{ x.imageWidth }}x{{ x.imageHeight }} px</span></li>
								
						 		
						 	</ul>
					
					</div>

				</div>	
				
		 </div>		
		
</div>
	




	
</body>
</html>
