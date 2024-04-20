<?php

require_once ('process/connexion.php');

$id = (isset($_GET['id']) ? $_GET['id'] : ''); 


?>



<html>
<head>
	<title>Project Status |  Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="styleview.css">
     <link rel="stylesheet" href="./assets/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/assets/css/bootstrap.theme.min.css">
  <link rel="stylesheet" href="./assets/assets/bootstrap-datepicker/css/datepicker.css">
  <link rel="stylesheet" href="./assets/assets/bootstrap-datepicker/css/datepicker-custom.css">
  <link rel="stylesheet" href="./assets/assets/css/custom.css">
  <script src="./assets/assets/js/jquery.min.js"></script>
  <script src="./assets/assets/js/bootstrap.min.js"></script>
  <script src="./assets/assets/js/custom.js"></script>
  <script src="./assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="./assets/assets/bootstrap-datepicker/js/datepicker-custom.js"></script>
  <script type="text/javascript">
 </script>
</head>
<body>
	    <header>
        <nav>
            <h1>EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homeblack" href="addemp.php">ajouter un employé</a></li>
                <li><a class="homeblack" href="viewemp.php">list Employee</a></li>
                <li><a class="homeblack" href="assign.php">tache</a></li>
                <li><a class="homeblack" href="assignproject.php">L'état du tache</a></li>
                <li><a class="homeblack" href="historique.php">historique du tache</a></li>
                <li><a class="homeblack" href="notification.php">notification du tache</a></li>
                <li><a class="homeblack" href="salaryemp.php">Salaire Table</a></li> 
               
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>

	<div class="container">

    <?php 

            
    if (isset($_POST['submit'])) {
      InsertOrUpdate("UPDATE task_info SET type = 'rejeter' , description = '".$_POST['description']."' where Id_tache = '".$id."'");
      header('Refresh: 2; URL = notification.php');
    } 
     ?>
     
     <form method="POST">

 <div class="form-group">
  <h1>description</h1>
  </div>
     
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>



          <div class="form-group">
            <input type="submit" name="submit" class="form-control btn-primary" id="exampleFormControlInput1" >
          </div>


</form>


 
  </div>

	
</body>
</html>