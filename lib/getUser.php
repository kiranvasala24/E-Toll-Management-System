<?php
include('../database/db_connection.php');

// print_r($id);
if($_POST['function'] == 'edit'){
$id=$_POST['id'];
$sql = mysqli_query($con,'select * from tbl_adminuser where admin_id='.$id);
$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
$rows[] = $r;
}
echo json_encode($rows);
}else if ($_POST['function'] == 'submit') {
$id=$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['role'];
$sql= mysqli_query ($con,"
UPDATE tbl_adminuser SET
admin_username='".$name."',
admin_email='".$email."',
type='".$type."'
where admin_id= '".$id."'");
}else if ($_POST['function'] == 'add') {
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$type = $_POST['role'];
$query = "INSERT INTO tbl_adminuser (admin_name, admin_email, admin_username, admin_password, type, is_active)
VALUES ('".$name."', '".$email."', '".$username."', '".$password."', '".$type."', '1')";
$sql= mysqli_query ($con,$query);
}
?>