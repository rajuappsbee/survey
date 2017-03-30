<?php 
    require('db/dbcon.php');
    if($_POST){
        if(($_POST['user'] == 'appsbee') && ($_POST['pass'] == 'appsbee@123')){
            $_SESSION['isAdminLogin'] = 1;
        }else{
            session_destroy();
            echo "<script>window.location.href = 'admin.php';</script>";
        }
    }

    if(isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] == 1){
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Answers</title>
    	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap Material Design -->
      <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
      <link href="css/ripples.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet" type="text/css" />

      <!-- DataTables CSS -->
      <link href="datatables/css/dataTables.bootstrap.css" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="datatables/css/dataTables.responsive.css" rel="stylesheet">

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
        
        <!-- <div class="container"> -->
        <div class="col-lg-12 m_top">
          <table class="table table-striped table-bordered table-hover" id="dataTablesFirst">
              <thead>
                <tr>
                  <th style="display:none;">Serial No.</th>
                  <th>Answer1</th>
                  <th>Answer2</th>
                  <th>Answer3</th>
                  <th>Answer4</th>
                  <th>Answer5</th>
                  <th>Answer6</th>
                  <th>Answer7</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>

              <?php
                $query = mysql_query("SELECT * FROM `survey` WHERE `is_deleted`= 0 ORDER BY `id` DESC");
                if(mysql_num_rows($query)>0){
                  $i =0;
                  while($results = mysql_fetch_assoc($query)){
                    $i ++;
                  ?>
                    <tr>
                      <td style="display:none;">
                        <?php echo $i; ?>
                      </td>
                      <td>
                        <?php echo $results['answer1']; ?><br />
                        Comment : <?php echo $results['answer1_comment']; ?>
                      </td>
                      <td><?php echo $results['answer2']; ?></td>
                      <td><?php echo $results['answer3']; ?></td>
                      <td><?php echo $results['answer4']; ?></td>
                      <td><?php echo $results['answer5']; ?></td>
                      <td><?php echo $results['answer6']; ?></td>
                      <td><?php echo $results['answer7']; ?></td>
                      <td><?php echo $results['name']; ?></td>
                      <td><?php echo $results['email']; ?></td>
                      <td><?php echo $results['phone']; ?></td>
                      <td><?php echo $results['address']; ?></td>
                    </tr>
                  <?php
                  }
                }
              ?>

            </tbody>
          </table>
        </div>
        <!-- </div> -->
    </body>
    <!-- Material Design for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/ripples.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="datatables/js/jquery.dataTables.min.js"></script>
    <script src="datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="datatables/js/dataTables.responsive.js"></script>

    <script>
      $.material.init();

      //datatables plugin integrate
      $(document).ready(function() {
        $('#dataTablesFirst').DataTable({
            responsive: true
        });
      });
    </script>
  </html>

<?php 
  } else {
      echo "<script>window.location.href = 'admin.php';</script>";
  }
?>
