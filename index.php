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

	<div class="container">
		<div class="row">
			 <div class="col-12">
			 	 <h1>Beautiful yellow flowers from Pixabay :)</h1>
				 <hr>
			 </div>
		</div>
	</div>
	
	
<? // main container for images  ?>
		<div ng-controller="myController">
			<div class="container">

				<div class="row margin1rem">

					 <div class="col-12 col-sm-6 col-md-4 col-lg-3" ng-repeat="x in myData">

						 <? //forcing images to all be equal size; 16/9 ?>
						 <div class="imageContainer img-responsive-16by9">
							 <a href="image.php?id={{ x.id }}"><img src="{{ x.webformatURL }}" class="img-fluid"></a>
							 <div class="overimage">{{ x.tags }}</div>
						 </div>

					</div>	

				</div>	
				
				
				
					<div class="row">
						<div class="col text-center">
							<span ng-controller="PreviousPageClick">
								<button id="prevBtn" class="btn btn-secondary" ng-click="myFunction()">Previous page</button>
							</span>
							
							<span ng-controller="NextPageClick">
								<button id="nextBtn" class="btn btn-primary" ng-click="myFunction()">Next page</button>
							</span>	
								
								<p>Page: {{ PageNumber }}</p>
							
						</div>
					</div>

				
				
		 </div>		
		</div>

	
	
</body>
</html>
