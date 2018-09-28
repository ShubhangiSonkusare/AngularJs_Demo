<!DOCTYPE html>
<html>
<head>
	<title>Movie Details</title>
	<script src="angular.min.js"></script>
	<style type="text/css">
		
		#movie1{
		height: 200px;
		width: 250px;
		padding:3px;
		margin: 2%;
		float: left;
		border: 1px solid;
		}
		#movie1:nth-child(odd){
			/*background: gray;*/
			/*color: white;*/
		}
	</style>
</head>
<body ng-app="" ng-init="movie=[{name:'3Idiot',rating: 5, discription:'Comedy'},{name:'BKD',rating: 4, discription:'Comedy-Melodrama'},{name:'Rockon',rating:4.5, discription:'Comedy'}]">
	<h3>List of Movies</h3>
	<div id="movie1" ng-repeat="x in movie">
		<h2>Name: {{x.name}}</h2>
		<h4>Rating: {{x.rating}}</h4>
		<h4>Discription: {{x.discription}}</h4>
	</div>
</body>
</html>
