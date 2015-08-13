var myProject = angular.module('myProject', [
	'ngRoute',
	'app'
]);

// Handles all routes and page templates
myProject.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	$routeProvider.
		when('/', {
			templateUrl: 'includes/home.php',
			controller: 'HomeController'
		}).
		when('/story', {
			templateUrl: 'partials/story.html',
			controller: 'StoryController'
		}).
		when('/poster', {
			templateUrl: 'partials/poster.html',
			controller: 'PosterController'
		}).
		when('/gallery', {
			templateUrl: 'partials/gallery.html',
			controller: 'GalleryController'
		}).
		when('/gallery/:page', {
			templateUrl: 'partials/gallery.html',
			controller: 'GalleryController'
		}).
		when('/trailer', {
			templateUrl: 'partials/trailer.html',
			controller: 'TrailerController'
		}).
		otherwise({
			redirectTo: '/'
		});
}]);