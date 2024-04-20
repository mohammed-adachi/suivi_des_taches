<?php 

require_once ('process/connexion.php');

$datecourent = date("Y-m-d H:i:s",strtotime("+8 hour") ); // ,strtotime("+8 hour")
$variable = selectall("select * from task_info where `date de fin`<'".$datecourent."' and `type`!='rejeter' ");


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
                <li><a class="homeblack" href="salaryemp.php">Salaire Table</a></li> 
               
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>

	<div class="container">

       
 <?php foreach ($variable as $value): ?>
                      

   <form  method="POST" class="form-inline" action="test.php?id=<?=$value["Id_tache"];?>">
    <div class="alert alert-warning" role="alert" style="margin-top: 10px;">
        <div>
          <div>le date de cette tache <?= $value["Id_tache"]; ?> est expiré ou vous avez oublié a confirmer le tache</div>
           <div style="text-align: right;">

              <div class="form-group mx-sm-3 mb-2">
                  <label for="exampleFormControlSelect1">type</label>
                  <select class="form-control" name="type" class="class1">
                    <option value="null">____</option>
                    <option value="rejeter">rejeter</option>
                    <option value="fait">fait </option>
                  </select>
                </div>

                <div class="form-group mx-sm-3 mb-2" id="mydiv">
                  
                  </div>

                <div class="form-group mx-sm-3 mb-2">
                  <input type="text" class="form-control" name=<?=$value["Id_tache"];?> id="inputPassword2" placeholder="vous pouvez le modifier">
                  </div>
                  
                <button type="submit" class="btn btn-primary mb-2"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                      </svg>
                </button>
              
             </div>
         </div>
    </div>
</form> 

<?php endforeach;?>
            

 
  </div>

	
</body>
</html>