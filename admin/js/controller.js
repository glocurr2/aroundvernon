var maint = angular.module('maint', ['ngRoute']);
maint.config(function ($routeProvider) {
	$routeProvider.when('/add', {
		templateUrl: 'views/add.php',
		controller: 'businessAddCtrl'
	});
	$routeProvider.when('/:id', {
		templateUrl: 'views/edit.php',
		controller: 'businessEditCtrl'
	});
	$routeProvider.when('/delete/:id', {
		templateUrl: 'views/delete.php',
		controller: 'businessDeleteCtrl'
	});
	$routeProvider.otherwise({
		templateUrl: 'views/list.php',
		controller: 'businessListCtrl'
	});					   
					   
});


maint.config(['$httpProvider', function($httpProvider) {
    //initialize get if not there
    if (!$httpProvider.defaults.headers.get) {
        $httpProvider.defaults.headers.get = {};    
    }    
    //disable IE ajax request caching
    $httpProvider.defaults.headers.get['If-Modified-Since'] = 'Mon, 26 Jul 1997 05:00:00 GMT';
    $httpProvider.defaults.headers.get['Cache-Control'] = 'no-cache';
    $httpProvider.defaults.headers.get['Pragma'] = 'no-cache';
}]);


maint.controller('businessListCtrl', BusinessListCtrl);
maint.controller('businessEditCtrl', BusinessEditCtrl);
maint.controller('businessAddCtrl', BusinessAddCtrl);
maint.controller('businessDeleteCtrl', BusinessDeleteCtrl);


maint.factory('getbusinesses', function($http) {
	return {
		list: function (callback) {
			$http.get('businesses.php?v='+ Date.now()).success(callback);
		}
	};
});

	
//**********LIST CONTROL*******************//
function BusinessListCtrl($scope,getbusinesses) {
	    getbusinesses.list(function(getbusinesses) {
          $scope.businesses = getbusinesses;
        });
}
	

//**********ADD CONTROL*******************//
function BusinessAddCtrl($scope, $http, $location) {
	 $scope.addData = addData;
	 function addData() {
	  if ($scope.bname_a !== "") {
	   $http.post("addthis.php",{'bname_a' : $scope.formData.bname_a.$modelValue, 'address1_a' : $scope.formData.address1_a.$modelValue, 'city_a' : $scope.formData.city_a.$modelValue, 'zip_a' :  $scope.formData.zip_a.$modelValue, 'phone_a' : $scope.formData.phone_a.$modelValue})
		 .success(function() {
			 $location.path( '/' );
		  });
	  } else {
		  alert("Business Name is required");
		  return false;
	  }
	}
	
}

//**********EDIT CONTROL*******************//
function BusinessEditCtrl($scope, $routeParams, $http, $location) {
	  $scope.id = $routeParams.id;
	  $scope.updateData = updateData;
	  $http.get('businesses.php?v='+ Date.now()).success(function(data) {
		var businessdata = data.filter(function(entry) {
			return entry.id === $scope.id;						
		})[0];
		console.log(businessdata.bname);
		$scope.bname = businessdata.bname;
		$scope.address1 = businessdata.address1;
		$scope.city = businessdata.city;
		$scope.zip = businessdata.zip;
		$scope.phone = businessdata.phone;
	  });
				
 function updateData() {
	  console.log($scope.formData.bname_e.$modelValue);
	  console.log($scope.formData.address1_e.$modelValue);
	  if ($scope.formData.bname_e.$modelValue !== "" && $scope.formData.bname_e.$modelValue !== "business name") {
		  $http.post("updatethis.php",{'bname' : $scope.formData.bname_e.$modelValue, 'address1' : $scope.formData.address1_e.$modelValue, 'city' : $scope.formData.city_e.$modelValue, 'zip' : $scope.formData.zip_e.$modelValue, 'phone' : $scope.formData.phone_e.$modelValue, 'theid' : $scope.formData.theid.$modelValue})
			.success(function() {
			 $location.path( '/' );
		   });
	} else {
		  alert("Business Name is required");
		  return false;
	 }
  }


}

//**********DELETE CONTROL*******************//
function BusinessDeleteCtrl($scope, $routeParams, $http, $location) {
	  $scope.id = $routeParams.id;
	  $scope.deleteData = deleteData;
	  console.log($scope.id);
	  $http.get('businesses.php?v='+ Date.now()).success(function(data) {
		var businessdata = data.filter(function(entry) {
			return entry.id === $scope.id;						
		})[0];
		$scope.bname = businessdata.bname;
		console.log($scope.bname);
		});
      console.log($scope.id);
	  function deleteData() {
	  console.log($scope.id);
	  if ($scope.id !== "") {
	   $http.post("deletethis.php",{'theid' : $scope.id})
		 .success(function() {
			 $location.path( '/' );
		  });
	  } 
     }

}
