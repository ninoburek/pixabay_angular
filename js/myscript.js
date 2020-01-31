
	//change this to your Pixabay key: 
	var KEY = "6473511-0417f2cad683f1bee54cafe15";
	//--------------------------------------------- 
	
	// default app setup
	var DefaultPageNumber = 1;
	var ItemsPerPage = 12
	//--------------------------------------
	

	//start angluar app
	var app = angular.module('myGreatApp', []);
	
	//setup main controller
	app.controller('myController', function($scope, $http,$location) {
	  
		var currentPage = getUrlVars()["page"];
		
		//if page==1 then must disable previus page button
		if(currentPage==1){
			var element = document.getElementById("prevBtn");
			element.classList.add("hidden");
		}
		
		//setup the default page number if not set
		if(currentPage===undefined)currentPage=DefaultPageNumber;
		
		
		//get images ajax request
		$http.get("https://pixabay.com/api/?key="+KEY+"&q=yellow+flowers&image_type=photo&page="+currentPage+"&per_page="+ItemsPerPage+"")
	  .then(function(response) {
		
		$scope.response = response.data; 	 //all json data; maybe needed somewhere? 
		$scope.myData = response.data.hits;  //just 'hits', images data 
  

	  });
		
	});

	//next page button controller
	app.controller('NextPageClick', function($scope) {
	  
	  var currentPage = getUrlVars()["page"];
		
	  $scope.page = currentPage;
	  $scope.myFunction = function() {
		$scope.page++;
		
		  document.location = "index.php?page="+$scope.page+"";
	  }
	});
	//--------------------------------
	
	//prevous page button controller
	app.controller('PreviousPageClick', function($scope) {
	  
	  var currentPage = getUrlVars()["page"];
		
	  $scope.page = currentPage;
	  $scope.myFunction = function() {
		$scope.page--;
		
		  document.location = "index.php?page="+$scope.page+"";
	  }
	});
	//----------------------------------


	
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}	