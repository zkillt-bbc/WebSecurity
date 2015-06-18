<?php 
include_once 'connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>WebSecurity</title>
</head>
<body>

<div class="title">
	<h1>WebSecurity</h1>
</div>

<div class="action_box">
	<div class="list-group">
	  <a href="#" class="list-group-item active">Cras justo odio</a>
	  <a href="#" class="list-group-item" onclick="myFunction('SELECT * FROM websecurity')">Alle Namen aus der DB auslesen</a>	
	  <a href="#" class="list-group-item" onclick="myFunction('UPDATE `username` SET `USERNAME`= `GEW&Uuml;NSCHTER NAME` WHERE `ZIELPERSON NAME`')">Daten &auml;ndern</a>
	  <a href="#" class="list-group-item" onclick="myFunction('Function 3')">Dapibus ac facilisis in</a>
	  <a href="#" class="list-group-item" onclick="myFunction('Function 4')">Dapibus ac facilisis in</a>
	</div>
</div>

<div class="form-group code-input">
  <h4>Eingabe</h4>
  <div class="input-group">
    <span class="input-group-addon">{ }</span>
    <input id="myText" type="text" class="form-control">
    <span class="input-group-btn">
      <button class="btn btn-primary" type="button">Senden</button>
    </span>
  </div>
</div>
<br>
<br>
<br>

<div class="panel panel-primary code-output">
  <div class="panel-heading">
    <h3 class="panel-title">Resultat</h3>
  </div>
  <div class="panel-body">
    
  </div>
</div>

	<script type="text/javascript">
	function myFunction(text) {
	    document.getElementById("myText").value = text;
	}
	</script>

</body>
</html>