<?php 
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db_tpe_web2;charset=utf8'
    , 'root', '');
    $sentencia = $db->prepare( "select * from categoria");
    $sentencia->execute();
    $sentencia->fetchAll();

function home() {

return '
	<!DOCTYPE html>
	<html>

	<head>
	    <meta charset="UTF-8">
		<title>NotOnlyCats_v.2</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">NOC</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a id="home" href="home">Home</a></li>
					<li><a id="wallpapers" href="wallpapers">Wallpapers</a></li>
					<li><a id="themes" href="themes">Themes</a></li>
					<li><a id="ringtones" href="ringtones">Ringtones</a></li>	
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a id="login-button"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		
		<div class="container" id="container">
			<div class="col-md-4 well">
				<div class="thumbnail">
		            <img class="categorie-img" src="img/wallpaper.jpg" alt="wallpapers">
		            <div class="caption">
		             	<p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Wallpapers </p>
		            </div>
		        </div>
				</div>
				<div class="col-md-4 well">
					<div class="thumbnail">
			            <img class="categorie-img" src="img/theme.jpg" alt="themes">
			            <div class="caption">
			                <p><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Themes </p>
			            </div>
			        </div>
				</div>
				<div class="col-md-4 well">
					<div class="thumbnail">
			            <img class="categorie-img" src="img/music.jpg" alt="ringtones">
			            <div class="caption">
			                <p><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Ringtones </p>
			            </div>
			        </div>
				</div>
			</div>
		<div>
		<table>
			<thead>
				<tr>
					<th>Ranking</th>
					<th>Title</th>
					<th>Section</th>
					<th>Times Downloaded</th>
					</tr>
			</thead>
			<tbody id="dataTable">
			</tbody>
		</table>
	</div>

	<div class="input-table">
		<h3 class="title-form">Input some data</h3>
		<form>
			<div>
				<label for="ranking">Ranking: </label>
				<input type="text" id="ranking" value="1º" name="ranking">
			</div>
			<div>
				<label for="name">Name:</label>
				<input type="text" id="title" value="Jake Dancing with a bug" name="name">
			</div>
			<div>
				<label for="section">Section:</label> 
				<input type="text" id="section" value="wallpaper" name="section">
			</div>
			<div>
				<label for="times">Times Downloaded:</label> 
				<input type="text" id="timesDownloaded" value="15" name="times">
			</div>
			<button id="sendData">Send data</button>
			<button id="sendData3Times">Send 3 Times</button>
		</form>
	</div>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
	</html>';
}
?>

