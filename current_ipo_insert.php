<?php

include('configadmin.php');
// table name
$tbl_name='currentipo';

// values sent from form
$c_name=$_POST['company_name'];
$s_date=$_POST['start_date'];
$e_date=$_POST['end_date'];
$c_type=$_POST['company_type'];
$c_price=$_POST['company_price'];
$c_size=$_POST['company_size'];
$c_lot=$_POST['company_lot'];
$img_url=$_POST['image_url'];
$o_url=$_POST['overview_url'];
$s_url=$_POST['strengths_url'];
$r_url=$_POST['risks_url'];
$ipo_url=$_POST['ipo_url'];
$ooi_url=$_POST['ooi_url'];
$subs_url=$_POST['subscription_url'];
$pl_url=$_POST['pl_url'];
$bs_url=$_POST['bs_url'];
$cf_url=$_POST['cf_url'];
$director_url=$_POST['director_url'];
$cc_url=$_POST['cc_url'];
$pdf_url=$_POST['pdf_url'];
$funda_url=$_POST['fundamentals_url'];
$sh_url=$_POST['sh_url'];
$v_url=$_POST['v_url'];
$industry=$_POST['industry'];


// Insert data into database
$sql="INSERT INTO $tbl_name(COMPANY_NAME, START_DATE, END_DATE, TYPE, PRICE, MIN_LOT, IMAGE_URL, OVERVIEW_URL, RISKS_URL, STRENGTHS_URL,
IPO_DETAILS_TABLE, OOI_TABLE, SUBSCRIPTION_TABLE, PL_TABLE, BS_TABLE, CF_TABLE, DIRECTOR_TABLE, CC_TABLE,INDUSTRY_PDF, F_TABLE,
SH_TABLE, V_TABLE,IPO_SIZE,INDUSTRY)VALUES('$c_name', '$s_date', '$e_date', '$c_type', '$c_price','$c_lot','$img_url','$o_url',
'$r_url','$s_url','$ipo_url','$ooi_url','$subs_url','$pl_url','$bs_url','$cf_url','$director_url','$cc_url','$pdf_url','$funda_url',
'$sh_url','$v_url','$c_size','$industry')";
$result=mysqli_query($con,$sql);

// if suceesfully inserted data into database, send confirmation link to email
if($result){

	echo '<script type="text/javascript">';
        echo 'alert("Thank you! Your request has been successfully sent.")';
        echo '</script>';

}else{
	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
    mysqli_close ($con);
    echo "<META http-equiv=\"refresh\" content=\"0;URL=admin.php\">";


?>
