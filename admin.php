<?php
    require('db/dbcon.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show Answers</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/login.css" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <!-- <div class="header">
    	<div class="container">
    		<a href="#"><img src="img/logo.png" /></a>
        </div>
    </div> -->
    
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to show answers</h1><br>
          <form method="post" action="showanswers.php">
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
        </div>
      </div>
      </div>

<!-- Material Design for Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/ripples.min.js"></script>        
<script>
  $.material.init();
  $(document).ready(function(){
    $('#login-modal').modal({
      'backdrop': 'static',
      'keyboard': false
    });
  });
</script>
</body>
</html>