var app = angular.module('app', ['ngAnimate']);

app.controller('HomeController', ['$scope', '$http', function($scope, $http) {
	var currentPage = $('.main.ng-scope');
	currentPage.attr('id','home');
	console.log( 'currentPage = ' + currentPage.attr('id') );
}]);

app.controller('StoryController', ['$scope', '$http', function($scope, $http) {
	var currentPage = $('.main.ng-scope');
	currentPage.attr('id','story');
	console.log( 'currentPage = ' + currentPage.attr('id') );
}]);

app.controller('GalleryController', ['$scope', '$http', function($scope, $http) {
	var currentPage = $('.main.ng-scope');
	currentPage.attr('id','gallery');
	console.log( 'currentPage = ' + currentPage.attr('id') );
}]);

app.controller('TrailerController', ['$scope', '$http', function($scope, $http) {
	var currentPage = $('.main.ng-scope');
	currentPage.attr('id','trailer');
	console.log( 'currentPage = ' + currentPage.attr('id') );
}]);