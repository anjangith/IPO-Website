<?php

include('configadmin.php');
// table name
$tbl_name='recentipo';

// values sent from form
$c_name=$_POST['r_company_name'];
$s_date=$_POST['r_start_date'];
$e_date=$_POST['r_end_date'];
$c_type=$_POST['r_company_type'];
$c_price=$_POST['r_company_price'];
$c_size=$_POST['r_company_size'];
$c_lot=$_POST['r_company_lot'];
$img_url=$_POST['r_image_url'];
$o_url=$_POST['r_overview_url'];
$s_url=$_POST['r_strengths_url'];
$r_url=$_POST['r_risks_url'];
$ipo_url=$_POST['r_ipo_url'];
$ooi_url=$_POST['r_ooi_url'];
$subs_url=$_POST['r_subscription_url'];
$pl_url=$_POST['r_pl_url'];
$bs_url=$_POST['r_bs_url'];
$cf_url=$_POST['r_cf_url'];
$director_url=$_POST['r_director_url'];
$cc_url=$_POST['r_cc_url'];
$pdf_url=$_POST['r_pdf_url'];
$funda_url=$_POST['r_fundamentals_url'];
$sh_url=$_POST['r_sh_url'];
$v_url=$_POST['r_v_url'];
$industry=$_POST['r_industry'];


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
    echo "<META http-equiv=\"refresh\" content=\"0;URL=../admin.php\">";


?>
