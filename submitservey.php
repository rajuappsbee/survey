<?php 
    require('db/dbcon.php');

    $name = isset($_POST['name']) ? $_POST['name'] : '';

    $email = isset($_POST['email']) ? $_POST['email'] : '';

    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    $address = isset($_POST['address']) ? $_POST['address'] : '';

    $answer1 = isset($_POST['answer1']) ? 'Yes' : 'No';

    $answer2 = isset($_POST['answer2']) ? $_POST['answer2'] : '';

    $answer3 = isset($_POST['answer3']) ? 'Yes' : 'No';

    $answer4 = isset($_POST['answer4']) ? $_POST['answer4'] : '';

    $answer5 = isset($_POST['answer5']) ? ( ($_POST['answer5'] == 'other') ? $_POST['answer51'] : $_POST['answer5'] ) : '';

    $answer6 = isset($_POST['answer6']) ? $_POST['answer6'] : '';

    $answer7 = isset($_POST['answer7']) ? $_POST['answer7'] : '';

    mysql_query("INSERT INTO `survey` (`name`, `email`, `phone`, `address`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `created`) VALUES ('".$name."', '".$email."', '".$phone."', '".$address."', '".$answer1."', '".$answer2."', '".$answer3."', '".$answer4."', '".$answer5."', '".$answer6."', '".$answer7."', NOW())");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Success</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <div class="header">
      <div class="container">
        <a href="#"><img src="img/logo.png" /></a>
        </div>
    </div>

  <div class="container-fixed qa_page">
    <div class="clr20"></div>
    <div class="clr20"></div>
    <center><h1>Thank you</h1></center>
  </div>

</body>

<!-- Material Design for Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/ripples.min.js"></script>        
<script>
  $.material.init();
</script>
</body>
</html>