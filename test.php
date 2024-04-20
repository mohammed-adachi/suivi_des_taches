<?php

       require_once ('process/connexion.php');

$id = (isset($_GET['id']) ? $_GET['id'] : '');               



 if ($_POST['type']!='null') {
     if ($_POST['type']=='rejeter' )
              {       
      header('Refresh: 2; URL = historique.php?id='.$id);
           
         }elseif ($_POST['type']=='fait' )
              { 

    InsertOrUpdate("DELETE FROM `task_info` WHERE `Id_tache`='".$id."'");
    header('Refresh: 2; URL = notification.php');               
           
         } 
 } else {
   InsertOrUpdate("UPDATE task_info SET `date de fin` ='".date("Y-m-d H:i:s", strtotime ( "+". $_POST[$id]."hour"))."',
`type`='etaler' WHERE `Id_tache`='".$id."'"); 
       header('Refresh: 2; URL = notification.php');

 }
 


         ?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="d-flex justify-content-center" style="margin-top:20%;">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


