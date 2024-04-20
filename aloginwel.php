<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
    <header>
        <nav>
        
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
	 
	
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Classement des employés</h2>
    	<table style="border: 1px solid white;
  border-collapse: collapse;width:100%; margin-right: 1200px">

			<tr style="background-color: #96D4D4;">
				<th style="background-color: #96D4D4;" align = "center">Seq.</th>
				<th style="background-color: #96D4D4;" align = "center">Emp. ID</th>
				<th style="background-color: #96D4D4;" align = "center">Name</th>
				
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
									
					$seq+=1;
				}


			?>

		</table>

		

		
	</div>
</body>
</html>