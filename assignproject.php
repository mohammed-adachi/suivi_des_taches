<?php

require_once ('process/connexion.php');

?>



<html>
<head>
	<title>Project Status |  Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
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
     
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom de l'employer</th>
      <th scope="col">description</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>

    <?php $var =selectall("select * from task_info"); ?>
    <?php foreach ($var as $value): ?>
                      <tr>
                        <th scope="row"><?= $value["Id_tache"]; ?></td>
                        <td><?= $value["employer"]; ?></td>
                        <td><?= $value["description"]; ?></td>
                        <td><?= $value["type"]; ?></td>
                      </tr>
    <?php endforeach;?>
  </tbody>
</table>
 
    </div>
		
	
</body>
</html>