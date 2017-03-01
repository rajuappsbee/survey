<?php 
    require('db/dbcon.php');
    header('Content-Type : application/json');
    header('Cache-Control: no-cache, must-revalidate');
    if($_GET['action']){
      if(!function_exists($_GET['action'])){
        die(json_encode(array('status'=>false,'message'=>'function not available!')));
      }else{
        $_GET['action']();
      }
    }

    function checkUniqueEmail(){
      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $chkQry = mysql_query('SELECT email from `survey` WHERE email = "'.$email.'"');
      if(mysql_num_rows($chkQry)>0){
        die(json_encode(array('status'=>false,'message'=>'Email id already exists! Please try with different email.')));
      }else{
        die(json_encode(array('status'=>true,'message'=>'Email id available.')));
      }
    }

    function checkUniquePhone(){
      $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
      $chkQry = mysql_query('SELECT phone from `survey` WHERE phone = "'.$phone.'"');
      if(mysql_num_rows($chkQry)>0){
        die(json_encode(array('status'=>false,'message'=>'phone number is already exists! Please try with different phone number.')));
      }else{
        die(json_encode(array('status'=>true,'message'=>'phone number available.')));
      }
    }
?>