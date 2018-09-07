var local = window.location.href;
var linkUrl = '';
var host = window.location.hostname;
var protocol = location.protocol;
var app = angular.module('login_post',[]);

app.controller('sign_in', function($scope, $http) {
	$scope.check_credentials = function () {
		
		if(!local.includes("index.php")){
			linkUrl = local + "index.php/welcome/login";
		} else {
			linkUrl = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/welcome/login";
		}
		
		var datos = {user: $scope.user, pass: $scope.password};

		$http({
			method: "POST",
			url: linkUrl,
			data: datos,
			headers: {'Content-Type':'application/x-www-form-urlencoded'}
		}).then( function(response){
				var mensaje = $('#message').text();
				if(response.data.findUser) {
					window.location = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/" + response.data.access + response.data.uri;
				} else {
					//$('#message').text(mensaje + ' - ' + response.data.error);
					alert(response.data.error);
				}
			}, 
			function error() {
				alert('Error al procesar la solicitud');
		});
	}

	$scope.create_account = function() {
		if(!local.includes("index.php")){
			linkUrl = local + "index.php/welcome/login/1";
		} else {
			linkUrl = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/welcome/login/1";
		}
		$http({
			method: "POST",
			url: linkUrl,
		}).then( function(response){
			window.location = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/" + response.data;
		});
	}

	$scope.recover_account = function() {
		if(!local.includes("index.php")){
			linkUrl = local + "index.php/welcome/login/1";
		} else {
			linkUrl = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/welcome/login/2";
		}
		$http({
			method: "POST",
			url: linkUrl,
		}).then( function(response){
			window.location = protocol + "//" + host + "/grilosystems/ERPGS/vorrat/vorrat2/index.php/" + response.data;
		});
	}

});