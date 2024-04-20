<?php

require_once ('dbh.php');
$pid = $_POST['pid'];
$eid = $_POST['eid'];
$pname = $_POST['pname'];
$mark = $_POST['mark'];
$subdate = $_POST['subdate'];
$duedate = $_POST['duedate'];
$status = $_POST['status'];

$sql = "INSERT INTO `project`(`pid`,`eid`, `pname`, `duedate` ,`subdate` ,`mark` , `status`) VALUES ('$pid' ,'$eid' , '$pname' ,'$duedate','$subdate','$mark' ,'$status')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>