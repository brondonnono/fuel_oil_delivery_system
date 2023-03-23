<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<meta name="Viewport" content="width=device-width,initial-scale=1">
	<title>layout</title>
	<style>
	* {
		box-sizing: border-box;
	}
.row:after{
	/*width:900px;
	height: 800px;
	background-color: green;
	clear: both;*/
	content: "";
	display: table;
	clear: both;
}
.column1{
	height: 300px;
	width: 30%;
	padding: 10px;
	background-color: yellow;
	float: left;
}
.column2{
	height: 350px;
	width: 45%;
	padding: 10px;
	background-color: green;
	float: left;
}

.column3{
	height: 400px;
	width: 25%;
	padding: 10px;
	background-color: orange;
	float: right;
}
</style>


</head>

	
	<body>
		<h2>Three column layout</h2>
		<div class="row">
			<div class ="column1">
			<h2>Left column</h2>
				<p>Hellooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
					ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
					ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
					ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				</p>
			</div>

			<div class ="column2">
			<h2>Center column</h2>
			<p>Hellooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
			</p>
			</div>

			<div class ="column3">
			<h2>Right column</h2>
			<p>Helloooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
				ooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>
			</p>
			</div>
		
		</div>



	</body>
	
	</html>