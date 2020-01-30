<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Title!</title>
		
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col">
			
			<div ng-app="myGreatApp" ng-controller="myController">

				<div ng-repeat="x in myData">
					{{ x.previewURL }}
				 </div>
			
		</div>
	</div>	
</div>	
	
<script>
	
	//change this to your Pixabay key:
	var KEY = "6473511-0417f2cad683f1bee54cafe15";
	//---------------------------------------------
	
	
var app = angular.module('myGreatApp', []);
app.controller('myController', function($scope, $http) {
  $http.get("https://pixabay.com/api/?key="+KEY+"&q=yellow+flowers&image_type=photo")
  .then(function(response) {
    $scope.response = response.data;
	$scope.myData = response.data.hits;
	  
	  
  });
});
	
	
</script> 

	
	
</body>
</html>
