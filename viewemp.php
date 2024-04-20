<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
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
	<title>Attribuer un projet</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<style>
a {
  color: red;
}

</style>
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


		<table>
			<tr>

				<th align = "center"style=" background-color: aqua;
  color: white;">Emp. ID</th>
				<th align = "center"style=" background-color: aqua;
  color: white">Picture</th>
				<th align = "center" style=" background-color: aqua;
  color: white">Name</th>
				<th align = "center" style=" background-color:aqua ;
  color: white">Email</th>
				<th align = "center"style=" background-color:aqua;
  color: white">année</th>
				<th align = "center"style=" background-color: aqua;
  color: white">Gender</th>
				<th align = "center"style=" background-color: aqua;
  color: white">Contact</th>
				
				<th align = "center" style=" background-color: aqua;
  color: white">Address</th>
				<th align = "center"style=" background-color: aqua;
  color: white>Department</th>
				
				
				
				<th align = "center" style=" background-color: aqua;
  color: white">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					
					echo "<td>".$employee['address']."</td>";
					
										
					echo "<td><a  href=\"edit.php?id=$employee[id]\" >Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>