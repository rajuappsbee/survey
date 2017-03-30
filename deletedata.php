<?php
    require('db/dbcon.php');
    $surveyid = base64_decode($_GET['rel']);
    mysql_query("UPDATE `survey` SET `is_deleted` = 1 WHERE `id` = '".$surveyid."'");
    echo "<script>window.location.href = 'showanswers.php';</script>";
?>