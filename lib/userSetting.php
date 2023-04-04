<?php
include('../database/db_connection.php');

// print_r($id);
if($_POST['function'] == 'city'){
$name=$_POST['name'];
$query = "INSERT INTO city (city)
VALUES ('".$name."')";
$sql= mysqli_query ($con,$query);
}else if ($_POST['function'] == 'unit') {
$name=$_POST['name'];
$query = "INSERT INTO unit (unit)
VALUES ('".$name."')";
$sql= mysqli_query ($con,$query);
}else if ($_POST['function'] == 'quantityunit') {
$unit=$_POST['name'];
$query = "INSERT INTO quantityunit (unit)
VALUES ('".$unit."')";
$sql= mysqli_query ($con,$query);
}else if ($_POST['function'] == 'payment') {
$name=$_POST['name'];
$query = "INSERT INTO payment (payment_mode)
VALUES ('".$name."')";
$sql= mysqli_query ($con,$query);
}else if ($_POST['function'] == 'userType') {
$name=$_POST['name'];
$query = "INSERT INTO usertype (userType)
VALUES ('".$name."')";
$sql= mysqli_query ($con,$query);
}
?>