<?php

require_once ('process/connexion.php');


?>


<!DOCTYPE html>
<html>

<head>
 <style>
p {
  color: DarkGray;
}
   </style>

    <!-- Title Page-->
    <title>Attribuer un projet</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
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

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
   <header>
        <nav>
            <h1>Admin</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homeblack" href="addemp.php">ajouter un employé</a></li>
                <li><a class="homeblack" href="viewemp.php">list Employee</a></li>
                <li><a class="homeblack" href="assign.php">tache</a></li>
                <li><a class="homeblack" href="assignproject.php">L'état du tache</a></li>
                  <li><a class="homeblack" href="historique.php">historique du tache</a></li>
                <li><a class="homeblack" href="notification.php">notification du tache</a></li>

             
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>


    

    <div class="container" style="margin-top:20px; border: 1px solid;">


     


            <?php

             $var="";
            if (isset($_POST['submit']) )
              { 
      
InsertOrUpdate("INSERT INTO task_info VALUES('".$_POST['Id_tache']."','".$_POST['select_employer']."','".$_POST['appliction']."','encours','".$_POST['nombre_de_heur']."','".date("Y-m-d H:i:s", strtotime ( "+".$_POST['nombre_de_heur']."hour")) ."','".$_POST['description']."')");       


       
           
         } 
              
           
         ?> 





       <form  method="POST">

          
          <div class="form-group">
            <label for="exampleFormControlInput1">Id tache</label>
            <input type="text"  name="Id_tache" class="form-control" id="exampleFormControlInput1" placeholder="Id tache">
          </div>


          <div class="form-group">
            <label for="exampleFormControlSelect1"> select employer</label>

            <?php $variable3 = select("select DISTINCT (firstName) from employee "); ?>

            <select class="form-control" name="select_employer" id="exampleFormControlSelect1">
               <?php foreach ($variable3 as $value) :?>
               <option value=<?=$value; ?>> <?=$value; ?> </option>
                <?php endforeach;?>
            </select>
          </div>


             <div class="form-group">
            <label for="exampleFormControlSelect1">appliction</label>
            <select class="form-control" name="appliction" id="exampleFormControlSelect1">
               <option value="amélioration"> amélioration </option>
               <option value="ajouter"> ajouter </option>
               <option value="error"> error </option>
            </select>
          </div>

          

      


          <div class="form-group">
            <label for="exampleFormControlInput1">nombre de heur</label>
            <input type="text"  name="nombre_de_heur" class="form-control" id="exampleFormControlInput1" 
            placeholder="nombre de heur">
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
            

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
