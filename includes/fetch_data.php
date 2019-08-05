<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ipo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['ID'];
$table_name=$_GET['t'];
$sql = "SELECT COMPANY_NAME,IMAGE_URL, OVERVIEW_URL, RISKS_URL,STRENGTHS_URL,IPO_DETAILS_TABLE,OOI_TABLE,SUBSCRIPTION_TABLE,
PL_TABLE,BS_TABLE,CF_TABLE,DIRECTOR_TABLE,CC_TABLE,INDUSTRY_PDF,F_TABLE,SH_TABLE,V_TABLE FROM $table_name WHERE ID=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$value = mysqli_fetch_object($result);
	$company_name=$value->COMPANY_NAME;
	$img_url=$value->IMAGE_URL;
	$overview_url=$value->OVERVIEW_URL;
	$risks=$value->RISKS_URL;
	$strengths=$value->STRENGTHS_URL;
	$ipo=$value->IPO_DETAILS_TABLE;
	$ooi=$value->OOI_TABLE;
	$subs=$value->SUBSCRIPTION_TABLE;
	$pl=$value->PL_TABLE;
	$bs=$value->BS_TABLE;
	$cf=$value->CF_TABLE;
	$director=$value->DIRECTOR_TABLE;
	$cc=$value->CC_TABLE;
	$pdf=$value->INDUSTRY_PDF;
	$funda=$value->F_TABLE;
	$sh=$value->SH_TABLE;
	$vt=$value->V_TABLE;

} else {
	echo "0 results";
}
$conn->close();
 ?>