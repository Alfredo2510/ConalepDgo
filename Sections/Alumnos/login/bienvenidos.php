<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php
  session_start();

  if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
  }
?>

<div class="container">
<h2>DOCUMENTOS</h2>
<p></p>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">lista de documentos</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        <li class="list-group-item">1</li>
        <li class="list-group-item">2</li>
        <li class="list-group-item">3</li>
      </ul>
      <div class="panel-footer">n...</div>
    </div>
  </div>
</div>
<a href="cierre.php">Cerrar Sesión</a>
</div>
  



</body>
</html>