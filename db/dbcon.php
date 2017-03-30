<?php
  session_start();
  /*$dbhost = '192.168.0.1';
  $dbuser = 'root';
  $dbpass = 'redhat456';
  $dbname = 'easy_appo';*/

  $dbhost = 'localhost';
  $dbuser = 'healthon_hompro';
  $dbpass = 'T{RM=Mc^8Fqg';
  $dbname = 'healthon_mobiledbpro';

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  $db = mysql_select_db($dbname,$conn);
  if(!$db){
    die('Could not connect: ' . mysql_error());
  }
?>