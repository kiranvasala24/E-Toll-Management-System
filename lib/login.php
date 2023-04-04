<?php 
session_start();
include('../database/db_connection.php');
    $user=$_REQUEST['username'];
    $password=$_REQUEST['password'];
$query=dbQuery("SELECT * FROM  `tbl_adminuser` WHERE  `admin_username` =  '".$user."' AND admin_password =  md5('".$password."') AND is_active =1");
$result=dbFetchAssoc($query);
$num_rows=dbNumRows($query);
if($num_rows>0){

$_SESSION["user"] = $result['admin_username'];
$_SESSION["name"] = $result['admin_name'];
$_SESSION["email"] = $result['admin_email'];
$_SESSION["user_id"]= $result['admin_id'];
$_SESSION['type'] = $result['type'];
 echo "1";
  }else{
 echo "2";
 	 }
?>