<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	require_once ('process/connexion.php');
	$firstName = selectobject("select * from employee where id = '".$id."'");
    $Name = $firstName["firstName"];

	$var =selectall("SELECT * FROM task_info where employer = '".$Name."'");

	
?>



<html>
<head>
	<style >
		a{ background-color: ; }


	</style>
	<title>Employee </title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	
	<header>
		<nav>
			<h1>gestion des taches</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">Mes Profile</a></li>
				<li><a class="homered" href="empproject.php?id=<?php echo $id?>"">Mes taches</a></li>
								<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	

		<table>
			<tr>

				<th align = "center"style=" background-color: aqua;color: white;">tache ID</th>
				<th align = "center"style=" background-color: aqua;color: white;">description</th>
				<th align = "center"style=" background-color: aqua;color: white;">N..heure</th>
				<th align = "center"style=" background-color: aqua;color: white;">type</th>
			</tr>

			

			 <?php foreach ($var as $value): ?>
                      <tr>
                        <td><?= $value["Id_tache"]; ?></td>
                        <td><?= $value["description"]; ?></td>
                        <td><?= $value["nombre de heur"]; ?></td>
                        <td><?= $value["type"]; ?></td>
                      </tr>
                      <?php endforeach;?>
            

		</table>
 <button class="btn btn-danger" style=" margin-top: 0;"><a href="create.php?id=<?=$id;?>" style="text-decoration: none; color:#fff;">creat tache</a></button>



		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

		</body>
</html>