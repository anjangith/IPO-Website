<?php

include('configadmin.php');
// table name
$tbl_name='proposedipo';

// values sent from form
$c_name=$_POST['p_company_name'];
$industry=$_POST['p_industry'];
$issue_size=$_POST['p_issue_size'];
$img_url=$_POST['p_image_url'];
$o_url=$_POST['p_overview_url'];
$s_url=$_POST['p_strengths_url'];
$r_url=$_POST['p_risks_url'];
$ipo_url=$_POST['p_ipo_url'];
$ooi_url=$_POST['p_ooi_url'];
$subs_url=$_POST['p_subscription_url'];
$pl_url=$_POST['p_pl_url'];
$bs_url=$_POST['p_bs_url'];
$cf_url=$_POST['p_cf_url'];
$director_url=$_POST['p_director_url'];
$cc_url=$_POST['p_cc_url'];
$pdf_url=$_POST['p_pdf_url'];
$funda_url=$_POST['p_fundamentals_url'];
$sh_url=$_POST['p_sh_url'];
$v_url=$_POST['p_v_url'];


// Insert data into database
$sql="INSERT INTO $tbl_name(COMPANY_NAME,INDUSTRY_NAME,ISSUE_SIZE, IMAGE_URL, OVERVIEW_URL, RISKS_URL, STRENGTHS_URL,
IPO_DETAILS_TABLE, OOI_TABLE, SUBSCRIPTION_TABLE, PL_TABLE, BS_TABLE, CF_TABLE, DIRECTOR_TABLE, CC_TABLE,INDUSTRY_PDF, F_TABLE,
SH_TABLE, V_TABLE)VALUES('$c_name', '$industry', '$issue_size','$img_url','$o_url',
'$r_url','$s_url','$ipo_url','$ooi_url','$subs_url','$pl_url','$bs_url','$cf_url','$director_url','$cc_url','$pdf_url','$funda_url',
'$sh_url','$v_url')";
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
