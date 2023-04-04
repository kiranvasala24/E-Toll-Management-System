<?php
function get_category_name($id){
	$ins=dbQuery("SELECT category FROM tbl_category_master WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['category'];
}
################################################################################
function get_area_name($id){
	$ins=dbQuery("SELECT area FROM tbl_area_master WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['area'];
}

################################################################################
function get_party_name($id){
	$ins=dbQuery("SELECT name FROM tabl_party WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['name'];
}

################################################################################
function get_gst_party_name($id){
	$ins=dbQuery("SELECT name FROM tabl_gst_debtor WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['name'];
}

################################################################################
function get_party_city($id){
	$ins=dbQuery("SELECT city FROM tabl_party WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['city'];
}

################################################################################
function get_transport_name($id){
	$ins=dbQuery("SELECT transport FROM tabl_party WHERE id='".$id."'");
	$res=dbFetchAssoc($ins);
    return $res['transport'];
}

################################################################################

function get_debitor_party(){

	$sel=dbQuery("SELECT * FROM tabl_party where party_type=2");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['id'].'">'.$res['name'].'('.$res['city'].')</option>';
	}
}

################################################################################

function get_gst_debitor_party(){

	$sel=dbQuery("SELECT * FROM tabl_gst_debtor where is_active = 1 ");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['id'].'">'.$res['name'].'('.$res['city'].')</option>';
	}
}

################################################################################
function get_debitor_name($id){
	$ins=dbQuery("SELECT name FROM tabl_party WHERE id='".$id."' and party_type=2");
	$res=dbFetchAssoc($ins);
    return $res['name'];
}
################################################################################

function get_creditor_party(){

	$sel=dbQuery("SELECT * FROM tabl_party where party_type=1");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['id'].'">'.$res['name'].'('.$res['city'].')</option>';
	}
}
################################################################################
function get_creditor_name($id){
	$ins=dbQuery("SELECT name FROM tabl_party WHERE id='".$id."' and party_type=1");
	$res=dbFetchAssoc($ins);
    return $res['name'];
}
################################################################################

function selected_debitor_party($id)
{

		  $sel="SELECT * FROM tabl_party where party_type=2";
		  $qry=dbQuery($sel) or die(mysql_error());  
		  while($res=dbFetchAssoc($qry))
		  {
			  if($id==$res['id']){ $sel='selected';}else{ $sel='';} 
		 
		 echo '<option value="'.$res['id'].'" '.$sel.'>'.$res["name"].'</option>';
		 
		  }
		 


}

################################################################################

function selected_gst_debitor_party($id)
{

		  $sel="SELECT * FROM tabl_gst_debtor where party_type=2";
		  $qry=dbQuery($sel) or die(mysql_error());  
		  while($res=dbFetchAssoc($qry))
		  {
			  if($id==$res['id']){ $sel='selected';}else{ $sel='';} 
		 
		 echo '<option value="'.$res['id'].'" '.$sel.'>'.$res["name"].'</option>';
		 
		  }
		 


}
################################################################################

function selected_creditor_party($id)
{

		  $sel="SELECT * FROM tabl_party where party_type=1";
		  $qry=dbQuery($sel) or die(mysql_error());  
		  while($res=dbFetchAssoc($qry))
		  {
			  if($id==$res['id']){ $sel='selected';}else{ $sel='';} 
		 
		 echo '<option value="'.$res['id'].'" '.$sel.'>'.$res["name"].'</option>';
		 
		  }
		 


}

################################################################################

function get_all_particular(){

	$sel=dbQuery("SELECT * FROM tabl_particular where status=1 ORDER BY name ASC");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
	}
}



################################################################################

function get_all_Units(){

	$sel=dbQuery("SELECT * FROM unit ORDER BY unit ASC");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['unit_id'].'">'.$res['unit'].'</option>';
	}
}


################################################################################

function get_all_Quantity_Units(){

	$sel=dbQuery("SELECT * FROM quantityunit ORDER BY unit ASC");
	
	
echo '<option value="0">-- SELECT --</option>';	
	while($res=dbFetchAssoc($sel)){
			
echo '<option value="'.$res['unit_id'].'">'.$res['unit'].'</option>';
	}
}


################################################################################


function get_particular_name($id){

	$sel=dbQuery("SELECT * FROM tabl_particular where id='".$id."'");
	$res=dbFetchAssoc($sel);
	echo $res['name'];
	
}

################################################################################


function get_balance_stock($id){

	$sel=dbQuery("select * from tabl_stock where p_id='".$id."'");
	$res=dbFetchAssoc($sel);
	echo $res['in_stock'] - $res['out_stock'];
	
}

################################################################################


function get_image_path($id){

	$sel=dbQuery("SELECT * FROM tabl_particular where id='".$id."'");
	$res=dbFetchAssoc($sel);
	echo $res['image'];
	
}

################################################################################


function get_temp_particular_name($id){

	$sel=dbQuery("SELECT * FROM tabl_temp_particular where id='".$id."'");
	$res=dbFetchAssoc($sel);
	echo $res['name'];
	
}


################################################################################

function get_selected_particular($id)
{

		  $sel="SELECT * FROM tabl_particular where status=1 ORDER BY name ASC";
		  $qry=dbQuery($sel) or die(mysql_error());  
		  while($res=dbFetchAssoc($qry))
		  {
			  if($id==$res['id']){ $sel='selected';}else{ $sel='';} 
		 
		 echo '<option value="'.$res['id'].'" '.$sel.'>'.$res["name"].'</option>';
		 
		  }
		 


}

################################################################################

function get_outstanding_amount($id){
	$ins=dbQuery("SELECT * from tabl_ledger where party_id='".$id."'");
	while($res=dbFetchAssoc($ins))
	{
	if($res['party_type']==2)
	{
	  $total_debit=$total_debit+$res['receive'];	
      $outstanding=number_format($total_debit-$total_credit,2);
	 
	}
	if($res['party_type']==1)
	{
	  $total_credit=$total_credit+$res['payment'];	
	 $outstanding=number_format($total_credit-$total_debit,2);	
	
	 
	  }
	}
	 echo $outstanding;
}
################################################################################

function get_opening_amount($id){
	$ins=dbQuery("SELECT * from tabl_ledger where party_id='".$id."'");
	while($res=dbFetchAssoc($ins))
	{
	if($res['party_type']==2)
	{
	  $total_debit=$total_debit+$res['receive'];	
	  
	  
      $opening=number_format($total_debit+$res['outstanding_amount'],2);
	 
	}
	if($res['party_type']==1)
	{
	  $total_credit=$total_credit+$res['payment'];	
	 $opening=number_format($total_credit+$res['outstanding_amount'],2);	
	
	 
	  }
	}
	 echo $opening;
}

##################################################################################

function get_payment_mode($id){

	$sel=dbQuery("SELECT recieve_type FROM tabl_receive where id='".$id."'");
	$res=dbFetchAssoc($sel);
	if($res['recieve_type']==1)
	{
		echo '[Cheque]';
	}
	else
	{
		echo '[Cash]';
	}
	
}


##################################################################################

function store_image($id){

	$filename = $_FILES['file']['image'];

/* Location */
$location = "upload/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      echo $location;
   }else{
      echo 0;
   }
}
	
}

################################################################################
