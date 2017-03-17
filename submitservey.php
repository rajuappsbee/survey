<?php 
    require('db/dbcon.php');
    include('PHPMailer-master/PHPMailerAutoload.php');
    include("attach_mailer/attach_mailer_class.php");

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { 
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LcLUBcUAAAAAEtqQszbJsmjhlg2C_mpFMvoif3a&response=' . $_POST['g-recaptcha-response']);
        $responseData   = json_decode($verifyResponse);
        if ($responseData->success) {

            $name = isset($_POST['name']) ? $_POST['name'] : '';

            $email = isset($_POST['email']) ? $_POST['email'] : '';

            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

            $address = isset($_POST['address']) ? $_POST['address'] : '';

            $answer1 = isset($_POST['answer1']) ? 'Yes' : 'No';

            $answer11 = isset($_POST['answer11']) ? $_POST['answer11'] : '';

            $answer2 = isset($_POST['answer2']) ? $_POST['answer2'] : '';

            $answer3 = isset($_POST['answer3']) ? 'Yes' : 'No';

            $answer4 = isset($_POST['answer4']) ? $_POST['answer4'] : '';

            $answer5 = isset($_POST['answer5']) ? ( ($_POST['answer5'] == 'other') ? $_POST['answer51'] : $_POST['answer5'] ) : '';

            $answer6 = isset($_POST['answer6']) ? $_POST['answer6'] : '';

            $answer7 = isset($_POST['answer7']) ? $_POST['answer7'] : '';

            mysql_query("INSERT INTO `survey` (`name`, `email`, `phone`, `address`, `answer1`, `answer1_comment`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `created`) VALUES ('".$name."', '".$email."', '".$phone."', '".$address."', '".$answer1."', '".$answer11."', '".$answer2."', '".$answer3."', '".$answer4."', '".$answer5."', '".$answer6."', '".$answer7."', NOW())");

            //email send to the user
            /*$mail = new PHPMailer;
            $mail->setFrom('noreply@localdoctors.in', 'noreply');
            $mail->addAddress($email, $name);
            $mail->Subject  = 'Thanks for your participation';
            $mail->isHTML(true);
            $mail->Body = "<html><head><title>Thanks for your participation</title></head><body><p>Hi ".$name.",</p><p>Thank you very much for participating this survey. We will be happy to send you a free gift to your address mentioned on the Survey web page. We will call you to confirm your address before we send you the gift.</p><p>Thanks,</p><p>Subhankar Saha</p><p>Survey Manager</p></body></html>";
            if(!$mail->send()) {
              echo 'Message was not sent.';
              echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
              echo 'Message has been sent.';
            }*/
            $post = array(
                      'name' => $name,
                      'email' => $email,
                      'subject' => 'Thanks for your participation',
                      'message' => 'Thanks for your participation'
                    );
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERPWD, "admin : 123456");
            $result = curl_exec($ch);
            curl_close($ch);

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
        <!--<a href="javascript:void(0);"><img src="img/logo.png" /></a>-->
        <h3 class="hey_text">HEY BENGALURU</h3>
      </div>
    </div>

  <div class="container-fixed qa_page">
    <div class="clr20"></div>
    <div class="clr20"></div>
    <center><h1>Thank you for participating the survey. We will send you a free gift to your address.</h1></center>
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

<?php
      } else {
        $errMsg = 'Robot verification failed, please try again.';
        $_SESSION['errMsg'] = $errMsg;
        //header("location:javascript://history.go(-1)");
        echo "<script>window.history.go(-1);</script>";
      }
  } else {
      $errMsg = 'Please click on the reCAPTCHA box.';
      $_SESSION['errMsg'] = $errMsg;
      //header("location:javascript://history.go(-1)");
      echo "<script>window.history.go(-1);</script>";
  }
?>