var app = angular.module('login_post',[]);

app.controller('sign_in', function($scope, $http) {
	$scope.check_credentials = function () {
		var linkUrl = window.location.href + "index.php/welcome/login";
		var datos = {user: $scope.user, pass: $scope.password};

		$http({
			method: "POST",
			url: linkUrl,
			data: datos,
			headers: {'Content-Type':'application/x-www-form-urlencoded'}
		}).then( function(response){
				var mensaje = $('#message').text();
				if(response.data.findUser) {
					window.location = response.data.access + response.data.uri;
				} else {
					$('#message').text(mensaje + ' - ' + response.data.error);
				}
			}, 
			function error(response) {
				alert('Error' + response);
		});
	}

	$scope.create_account = function() {
		var linkUrl = window.location.href + "index.php/welcome/login/1";
		$http({
			method: "POST",
			url: linkUrl,
		}).then( function(response){
			window.location = response.data;
		});
	}

	$scope.recover_account = function() {
		var linkUrl = window.location.href + "index.php/welcome/login/2";
		$http({
			method: "POST",
			url: linkUrl,
		}).then( function(response){
			window.location = response.data;
		});
	}
});