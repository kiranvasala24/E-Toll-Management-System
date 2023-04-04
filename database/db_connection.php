<?php

define ('HOSTNAME', 'localhost');

define ('USERNAME', 'root');

define ('PASSWORD', '');

define ('DATABASE_NAME', 'numberplate');

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE_NAME);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$site_name='DBCreation';

function dbQuery($sql)
{

	global $con;

	$result = mysqli_query($con,$sql);

	return $result;

}


function dbAffectedRows()

{

	global $con;	

	return mysqli_affected_rows($con);
}



function dbFetchArray($result) {
	return mysqli_fetch_array($result);

}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 

{

	return mysqli_fetch_row($result);

}

function dbFreeResult($result)

{

	return mysqli_free_result($result);

}



function dbNumRows($result)

{

	return mysqli_num_rows($result);

}



function dbSelect($con)

{

	return mysqli_select_db($con);

}



function dbInsertId()

{

	global $con;

	return mysqli_insert_id($con);

}

?>