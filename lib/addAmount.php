<?php
include('../database/db_connection.php');

$id=$_POST['id'];
$amount=$_POST['amount'];
$query=dbQuery("SELECT * FROM  numberplate WHERE  id =".$id);
$result=dbFetchAssoc($query);
$updatedamount = $amount + $result['balance']; 
$query = "UPDATE numberplate SET balance=".$updatedamount." where id=".$id ;
$sql= mysqli_query ($con,$query);
?>