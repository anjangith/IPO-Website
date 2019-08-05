<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['admin']))
	{
		header("location: adminlogin.php");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>TEJA</title>
	<meta charset="UTF-8">
	<meta name="description" content="Finance Website">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
	<div class="row">
  <h1 class="text-center text-primary"><strong>ADMIN PANEL FOR TEJA</strong></h1>
	<button class="btn btn-primary ml-auto mt-5"><a href="php/logout_admin.php" class="text-white">LOGOUT</a></button>
</div>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">DASHBOARD</a></li>
    <li><a data-toggle="tab" href="#menu1">ADD ITEM IN CURRENT IPO</a></li>
    <li><a data-toggle="tab" href="#menu2">ADD ITEM IN PROPSED IPO</a></li>
    <li><a data-toggle="tab" href="#menu3">ADD ITEM IN RECENT IPO</a></li>
    <li><a data-toggle="tab" href="#menu4">ADD ITEM IN APPROVAL RECEIVED</a></li>
    <li><a data-toggle="tab" href="#menu5">ADD ITEM IN APPROVAL RECEIVED>6M</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="text-center">DASHBOARD</h3>
			<div class="row">
				<h2 class="text-primary">CURRENT IPO DETAILS:</h2>
			<div class="table-responsive">
				<table class="table">
						<thead>
								<tr>
										<th scope="col">Company</td>
						<th scope="col">ACTION</td>
								</tr>
						</thead>
						<tbody>
						<?php
								$connect = mysqli_connect("localhost","root", "root","ipo");
								if (!$connect) {
										die(mysql_error());
								}
								$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME FROM currentipo LIMIT 10");
								while($row = mysqli_fetch_array($results)) {
								?>
										<tr>
							<td><?php echo $row['COMPANY_NAME']?></td>
								<td><a href="delete.php?id=<?php echo $row['ID']?>">DELETE</a></td>
							</tr>

								<?php
								}
								?>
								</tbody>
								</table>

								</div>
    </div>
		<h2 class="text-primary">PROPOSED IPO</h2>
		<div class="row">
			<table class="table">
					<thead>
							<tr>
									<th scope="col">Company</td>
					<th scope="col">ACTION</td>
							</tr>
					</thead>
					<tbody>
					<?php

							$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME FROM proposedipo LIMIT 10");
							while($row = mysqli_fetch_array($results)) {
							?>
									<tr>
						<td><?php echo $row['COMPANY_NAME']?></td>
							<td><a href="delete_proposed.php?id=<?php echo $row['ID']?>">DELETE</a></td>
						</tr>

							<?php
							}
							?>
							</tbody>
							</table>
		</div>

    <h2 class="text-primary">RECENT IPO</h2>
		<div class="row">
			<table class="table">
					<thead>
							<tr>
									<th scope="col">Company</td>
					<th scope="col">ACTION</td>
							</tr>
					</thead>
					<tbody>
					<?php

							$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME FROM recentipo LIMIT 10");
							while($row = mysqli_fetch_array($results)) {
							?>
									<tr>
						<td><?php echo $row['COMPANY_NAME']?></td>
							<td><a href="delete_proposed.php?id=<?php echo $row['ID']?>">DELETE</a></td>
						</tr>

							<?php
							}
							?>
							</tbody>
							</table>
		</div>

    <h2 class="text-primary">APPROVAL RECEIVED</h2>
		<div class="row">
			<table class="table">
					<thead>
							<tr>
									<th scope="col">Company</td>
					<th scope="col">ACTION</td>
							</tr>
					</thead>
					<tbody>
					<?php

							$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME FROM approvalr LIMIT 10");
							while($row = mysqli_fetch_array($results)) {
							?>
									<tr>
						<td><?php echo $row['COMPANY_NAME']?></td>
							<td><a href="delete_proposed.php?id=<?php echo $row['ID']?>">DELETE</a></td>
						</tr>

							<?php
							}
							?>
							</tbody>
							</table>
		</div>

    <h2 class="text-primary">APPROVAL RECEIVED >6M </h2>
    <div class="row">
      <table class="table">
          <thead>
              <tr>
          <th scope="col">Company</td>
          <th scope="col">ACTION</td>
              </tr>
          </thead>
          <tbody>
          <?php

              $results = mysqli_query($connect,"SELECT ID,COMPANY_NAME FROM approvalrec LIMIT 10");
              while($row = mysqli_fetch_array($results)) {
              ?>
                  <tr>
            <td><?php echo $row['COMPANY_NAME']?></td>
              <td><a href="delete_proposed.php?id=<?php echo $row['ID']?>">DELETE</a></td>
            </tr>

              <?php
              }
              ?>
              </tbody>
              </table>
    </div>



	</div>
    <div id="menu1" class="tab-pane fade">

			<div class="container">
  		<h2 class="text-primary">CURRENT IPO</h2>
  		<form action="php/current_ipo_insert.php" method="post">
    	<div class="form-group">
      <label for="company_name">COMPANY NAME</label>
      <input type="text" class="form-control" id="company_name" placeholder="Enter Company Name" name="company_name">
    </div>

	<div class="form-group">
      <label for="industry">INDUSTRY NAME</label>
      <input type="text" class="form-control" id="industry" placeholder="Enter Industry Name" name="industry">
    </div>

	<div class="form-group">
      <label for="start_date">START DATE:</label>
      <input type="date" class="form-control" id="start_date" placeholder="Enter Start Date" name="start_date">
    </div>

	<div class="form-group">
      <label for="end_date">END DATE:</label>
      <input type="date" class="form-control" id="end_date" placeholder="Enter End Date" name="end_date">
    </div>

	 <div class="form-group">
      <label for="company_type">COMPANY TYPE</label>
      <input type="text" class="form-control" id="company_type" placeholder="Enter Company Type" name="company_type">
    </div>

	<div class="form-group">
      <label for="company_type">COMPANY PRICE</label>
      <input type="text" class="form-control" id="company_price" placeholder="Enter Company Price" name="company_price">
    </div>

	<div class="form-group">
      <label for="company_size">COMPANY SIZE</label>
      <input type="text" class="form-control" id="company_size" placeholder="Enter Company Size" name="company_size">
    </div>

	<div class="form-group">
      <label for="company_lot">COMPANY MINIMUN LOT</label>
      <input type="text" class="form-control" id="company_lot" placeholder="Enter Company Price" name="company_lot">
    </div>

	<div class="form-group">
      <label for="image_url">IMAGE URL</label>
      <input type="text" class="form-control" id="image_url" placeholder="Enter Image Url" name="image_url">
    </div>

	<div class="form-group">
      <label for="company_lot">OVERVIEW URL</label>
      <input type="text" class="form-control" id="overview_url" placeholder="Enter Overview Url" name="overview_url">
    </div>

	<div class="form-group">
      <label for="strengths_url">STRENGTHS URL</label>
      <input type="text" class="form-control" id="strengths_url" placeholder="Enter Strengths Url" name="strengths_url">
    </div>

	<div class="form-group">
      <label for="risks_url">RISKS URL</label>
      <input type="text" class="form-control" id="risks_url" placeholder="Enter Risks Url" name="risks_url">
    </div>

	<div class="form-group">
      <label for="ipo_url">IPO DETAILS TABLE URL</label>
      <input type="text" class="form-control" id="ipo_url" placeholder="Enter IPO Url" name="ipo_url">
    </div>

	<div class="form-group">
      <label for="ooi_url">OBJECT OF ISSUE TABLE URL</label>
      <input type="text" class="form-control" id="ooi_url" placeholder="Enter OOI Url" name="ooi_url">
    </div>

	<div class="form-group">
      <label for="subscription_url">SUBSCRIPTION TABLE URL</label>
      <input type="text" class="form-control" id="subscription_url" placeholder="Enter Subscription Url" name="subscription_url">
    </div>

	<div class="form-group">
      <label for="pl_url">P&L TABLE URL</label>
      <input type="text" class="form-control" id="pl_url" placeholder="Enter P&L Url" name="pl_url">
    </div>

	<div class="form-group">
      <label for="bs_url">BALANCE SHEET TABLE URL</label>
      <input type="text" class="form-control" id="bs_url" placeholder="Enter Balance Sheet Url" name="bs_url">
    </div>


	<div class="form-group">
      <label for="cf_url">CASH FLOW TABLE URL</label>
      <input type="text" class="form-control" id="cf_url" placeholder="Enter Cash Flow Url" name="cf_url">
    </div>

	<div class="form-group">
      <label for="director">DIRECTOR TABLE URL</label>
      <input type="text" class="form-control" id="director_url" placeholder="Enter Balance Sheet Url" name="director_url">
    </div>

	<div class="form-group">
      <label for="cc_url">CONNECTED COMPANIES TABLE URL</label>
      <input type="text" class="form-control" id="cc_url" placeholder="Enter Connected Companies Url" name="cc_url">
    </div>

	<div class="form-group">
      <label for="pdf_url">INDUSTRY PDF URL</label>
      <input type="text" class="form-control" id="pdf_url" placeholder="Enter PDF Url" name="pdf_url">
    </div>

	<div class="form-group">
      <label for="fundamentals_url">Fundamentals Table URL</label>
      <input type="text" class="form-control" id="fundamentals_url" placeholder="Enter Fundamentals Url" name="fundamentals_url">
    </div>

	<div class="form-group">
      <label for="sh_url">Share Holding Table URL</label>
      <input type="text" class="form-control" id="sh_url" placeholder="Enter Share Holding Url" name="sh_url">
    </div>

	<div class="form-group">
      <label for="v_url">Valuation Table URL</label>
      <input type="text" class="form-control" id="v_url" placeholder="Enter Valuation Url" name="v_url">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


    </div>
    <div id="menu2" class="tab-pane fade">
      <h2 class="text-primary">PROPOSED IPO</h2>
		<form action="php/proposed_ipo_insert.php" method="post">
    	<div class="form-group">
      <label for="company_name">COMPANY NAME</label>
      <input type="text" class="form-control" id="p_company_name" placeholder="Enter Company Name" name="p_company_name">
    </div>

	<div class="form-group">
      <label for="industry">INDUSTRY NAME</label>
      <input type="text" class="form-control" id="p_industry" placeholder="Enter Industry Name" name="p_industry">
    </div>


	 <div class="form-group">
      <label for="issue_size">PROPOSED ISSUE SIZE</label>
      <input type="text" class="form-control" id="p_issue_size" placeholder="Enter Company Type" name="p_issue_size">
    </div>


	<div class="form-group">
      <label for="image_url">IMAGE URL</label>
      <input type="text" class="form-control" id="p_image_url" placeholder="Enter Image Url" name="p_image_url">
    </div>

	<div class="form-group">
      <label for="company_lot">OVERVIEW URL</label>
      <input type="text" class="form-control" id="p_overview_url" placeholder="Enter Overview Url" name="p_overview_url">
    </div>

	<div class="form-group">
      <label for="strengths_url">STRENGTHS URL</label>
      <input type="text" class="form-control" id="p_strengths_url" placeholder="Enter Strengths Url" name="p_strengths_url">
    </div>

	<div class="form-group">
      <label for="risks_url">RISKS URL</label>
      <input type="text" class="form-control" id="p_risks_url" placeholder="Enter Risks Url" name="p_risks_url">
    </div>

	<div class="form-group">
      <label for="ipo_url">IPO DETAILS TABLE URL</label>
      <input type="text" class="form-control" id="p_ipo_url" placeholder="Enter IPO Url" name="p_ipo_url">
    </div>

	<div class="form-group">
      <label for="ooi_url">OBJECT OF ISSUE TABLE URL</label>
      <input type="text" class="form-control" id="p_ooi_url" placeholder="Enter OOI Url" name="p_ooi_url">
    </div>

	<div class="form-group">
      <label for="subscription_url">SUBSCRIPTION TABLE URL</label>
      <input type="text" class="form-control" id="p_subscription_url" placeholder="Enter Subscription Url" name="p_subscription_url">
    </div>

	<div class="form-group">
      <label for="pl_url">P&L TABLE URL</label>
      <input type="text" class="form-control" id="p_pl_url" placeholder="Enter P&L Url" name="p_pl_url">
    </div>

	<div class="form-group">
      <label for="bs_url">BALANCE SHEET TABLE URL</label>
      <input type="text" class="form-control" id="p_bs_url" placeholder="Enter Balance Sheet Url" name="p_bs_url">
    </div>


	<div class="form-group">
      <label for="cf_url">CASH FLOW TABLE URL</label>
      <input type="text" class="form-control" id="p_cf_url" placeholder="Enter Cash Flow Url" name="p_cf_url">
    </div>

	<div class="form-group">
      <label for="director">DIRECTOR TABLE URL</label>
      <input type="text" class="form-control" id="p_director_url" placeholder="Enter Balance Sheet Url" name="p_director_url">
    </div>

	<div class="form-group">
      <label for="cc_url">CONNECTED COMPANIES TABLE URL</label>
      <input type="text" class="form-control" id="p_cc_url" placeholder="Enter Connected Companies Url" name="p_cc_url">
    </div>

	<div class="form-group">
      <label for="pdf_url">INDUSTRY PDF URL</label>
      <input type="text" class="form-control" id="p_pdf_url" placeholder="Enter PDF Url" name="p_pdf_url">
    </div>

	<div class="form-group">
      <label for="fundamentals_url">Fundamentals Table URL</label>
      <input type="text" class="form-control" id="p_fundamentals_url" placeholder="Enter Fundamentals Url" name="p_fundamentals_url">
    </div>

	<div class="form-group">
      <label for="sh_url">Share Holding Table URL</label>
      <input type="text" class="form-control" id="p_sh_url" placeholder="Enter Share Holding Url" name="p_sh_url">
    </div>

	<div class="form-group">
      <label for="v_url">Valuation Table URL</label>
      <input type="text" class="form-control" id="p_v_url" placeholder="Enter Valuation Url" name="p_v_url">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>
    <div id="menu3" class="tab-pane fade">

      <div class="container">
      <h2 class="text-primary">RECENT IPO</h2>
      <form action="php/recent_ipo_insert.php" method="post">
      <div class="form-group">
      <label for="company_name">COMPANY NAME</label>
      <input type="text" class="form-control" id="r_company_name" placeholder="Enter Company Name" name="r_company_name">
    </div>

  <div class="form-group">
      <label for="industry">INDUSTRY NAME</label>
      <input type="text" class="form-control" id="r_industry" placeholder="Enter Industry Name" name="r_industry">
    </div>

  <div class="form-group">
      <label for="start_date">START DATE:</label>
      <input type="date" class="form-control" id="r_start_date" placeholder="Enter Start Date" name="r_start_date">
    </div>

  <div class="form-group">
      <label for="end_date">END DATE:</label>
      <input type="date" class="form-control" id="r_end_date" placeholder="Enter End Date" name="r_end_date">
    </div>

   <div class="form-group">
      <label for="company_type">COMPANY TYPE</label>
      <input type="text" class="form-control" id="r_company_type" placeholder="Enter Company Type" name="r_company_type">
    </div>

  <div class="form-group">
      <label for="company_type">COMPANY PRICE</label>
      <input type="text" class="form-control" id="r_company_price" placeholder="Enter Company Price" name="r_company_price">
    </div>

  <div class="form-group">
      <label for="company_size">COMPANY SIZE</label>
      <input type="text" class="form-control" id="r_company_size" placeholder="Enter Company Size" name="r_company_size">
    </div>

  <div class="form-group">
      <label for="company_lot">COMPANY MINIMUN LOT</label>
      <input type="text" class="form-control" id="r_company_lot" placeholder="Enter Company Price" name="r_company_lot">
    </div>

  <div class="form-group">
      <label for="image_url">IMAGE URL</label>
      <input type="text" class="form-control" id="r_image_url" placeholder="Enter Image Url" name="r_image_url">
    </div>

  <div class="form-group">
      <label for="company_lot">OVERVIEW URL</label>
      <input type="text" class="form-control" id="r_overview_url" placeholder="Enter Overview Url" name="r_overview_url">
    </div>

  <div class="form-group">
      <label for="strengths_url">STRENGTHS URL</label>
      <input type="text" class="form-control" id="r_strengths_url" placeholder="Enter Strengths Url" name="r_strengths_url">
    </div>

  <div class="form-group">
      <label for="risks_url">RISKS URL</label>
      <input type="text" class="form-control" id="r_risks_url" placeholder="Enter Risks Url" name="r_risks_url">
    </div>

  <div class="form-group">
      <label for="ipo_url">IPO DETAILS TABLE URL</label>
      <input type="text" class="form-control" id="r_ipo_url" placeholder="Enter IPO Url" name="r_ipo_url">
    </div>

  <div class="form-group">
      <label for="ooi_url">OBJECT OF ISSUE TABLE URL</label>
      <input type="text" class="form-control" id="r_ooi_url" placeholder="Enter OOI Url" name="r_ooi_url">
    </div>

  <div class="form-group">
      <label for="subscription_url">SUBSCRIPTION TABLE URL</label>
      <input type="text" class="form-control" id="r_subscription_url" placeholder="Enter Subscription Url" name="r_subscription_url">
    </div>

  <div class="form-group">
      <label for="pl_url">P&L TABLE URL</label>
      <input type="text" class="form-control" id="r_pl_url" placeholder="Enter P&L Url" name="r_pl_url">
    </div>

  <div class="form-group">
      <label for="bs_url">BALANCE SHEET TABLE URL</label>
      <input type="text" class="form-control" id="r_bs_url" placeholder="Enter Balance Sheet Url" name="r_bs_url">
    </div>


  <div class="form-group">
      <label for="cf_url">CASH FLOW TABLE URL</label>
      <input type="text" class="form-control" id="r_cf_url" placeholder="Enter Cash Flow Url" name="r_cf_url">
    </div>

  <div class="form-group">
      <label for="director">DIRECTOR TABLE URL</label>
      <input type="text" class="form-control" id="r_director_url" placeholder="Enter Balance Sheet Url" name="r_director_url">
    </div>

  <div class="form-group">
      <label for="cc_url">CONNECTED COMPANIES TABLE URL</label>
      <input type="text" class="form-control" id="r_cc_url" placeholder="Enter Connected Companies Url" name="r_cc_url">
    </div>

  <div class="form-group">
      <label for="pdf_url">INDUSTRY PDF URL</label>
      <input type="text" class="form-control" id="r_pdf_url" placeholder="Enter PDF Url" name="r_pdf_url">
    </div>

  <div class="form-group">
      <label for="fundamentals_url">Fundamentals Table URL</label>
      <input type="text" class="form-control" id="r_fundamentals_url" placeholder="Enter Fundamentals Url" name="r_fundamentals_url">
    </div>

  <div class="form-group">
      <label for="sh_url">Share Holding Table URL</label>
      <input type="text" class="form-control" id="r_sh_url" placeholder="Enter Share Holding Url" name="r_sh_url">
    </div>

  <div class="form-group">
      <label for="v_url">Valuation Table URL</label>
      <input type="text" class="form-control" id="r_v_url" placeholder="Enter Valuation Url" name="r_v_url">
    </div>




    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </div>
  <div id="menu4" class="tab-pane fade">

    <h2 class="text-primary">APPROVAL RECEIVED</h2>
  <form action="php/ar_ipo_insert.php" method="post">
    <div class="form-group">
    <label for="company_name">COMPANY NAME</label>
    <input type="text" class="form-control" id="a_company_name" placeholder="Enter Company Name" name="a_company_name">
  </div>

<div class="form-group">
    <label for="industry">INDUSTRY NAME</label>
    <input type="text" class="form-control" id="a_industry" placeholder="Enter Industry Name" name="a_industry">
  </div>


 <div class="form-group">
    <label for="issue_size">PROPOSED ISSUE SIZE</label>
    <input type="text" class="form-control" id="a_issue_size" placeholder="Enter Company Type" name="a_issue_size">
  </div>


<div class="form-group">
    <label for="image_url">IMAGE URL</label>
    <input type="text" class="form-control" id="a_image_url" placeholder="Enter Image Url" name="a_image_url">
  </div>

<div class="form-group">
    <label for="company_lot">OVERVIEW URL</label>
    <input type="text" class="form-control" id="a_overview_url" placeholder="Enter Overview Url" name="a_overview_url">
  </div>

<div class="form-group">
    <label for="strengths_url">STRENGTHS URL</label>
    <input type="text" class="form-control" id="a_strengths_url" placeholder="Enter Strengths Url" name="a_strengths_url">
  </div>

<div class="form-group">
    <label for="risks_url">RISKS URL</label>
    <input type="text" class="form-control" id="a_risks_url" placeholder="Enter Risks Url" name="a_risks_url">
  </div>

<div class="form-group">
    <label for="ipo_url">IPO DETAILS TABLE URL</label>
    <input type="text" class="form-control" id="a_ipo_url" placeholder="Enter IPO Url" name="a_ipo_url">
  </div>

<div class="form-group">
    <label for="ooi_url">OBJECT OF ISSUE TABLE URL</label>
    <input type="text" class="form-control" id="a_ooi_url" placeholder="Enter OOI Url" name="a_ooi_url">
  </div>

<div class="form-group">
    <label for="subscription_url">SUBSCRIPTION TABLE URL</label>
    <input type="text" class="form-control" id="a_subscription_url" placeholder="Enter Subscription Url" name="a_subscription_url">
  </div>

<div class="form-group">
    <label for="pl_url">P&L TABLE URL</label>
    <input type="text" class="form-control" id="a_pl_url" placeholder="Enter P&L Url" name="a_pl_url">
  </div>

<div class="form-group">
    <label for="bs_url">BALANCE SHEET TABLE URL</label>
    <input type="text" class="form-control" id="a_bs_url" placeholder="Enter Balance Sheet Url" name="a_bs_url">
  </div>


<div class="form-group">
    <label for="cf_url">CASH FLOW TABLE URL</label>
    <input type="text" class="form-control" id="a_cf_url" placeholder="Enter Cash Flow Url" name="a_cf_url">
  </div>

<div class="form-group">
    <label for="director">DIRECTOR TABLE URL</label>
    <input type="text" class="form-control" id="a_director_url" placeholder="Enter Balance Sheet Url" name="a_director_url">
  </div>

<div class="form-group">
    <label for="cc_url">CONNECTED COMPANIES TABLE URL</label>
    <input type="text" class="form-control" id="a_cc_url" placeholder="Enter Connected Companies Url" name="a_cc_url">
  </div>

<div class="form-group">
    <label for="pdf_url">INDUSTRY PDF URL</label>
    <input type="text" class="form-control" id="a_pdf_url" placeholder="Enter PDF Url" name="a_pdf_url">
  </div>

<div class="form-group">
    <label for="fundamentals_url">Fundamentals Table URL</label>
    <input type="text" class="form-control" id="a_fundamentals_url" placeholder="Enter Fundamentals Url" name="a_fundamentals_url">
  </div>

<div class="form-group">
    <label for="sh_url">Share Holding Table URL</label>
    <input type="text" class="form-control" id="a_sh_url" placeholder="Enter Share Holding Url" name="a_sh_url">
  </div>

<div class="form-group">
    <label for="v_url">Valuation Table URL</label>
    <input type="text" class="form-control" id="a_v_url" placeholder="Enter Valuation Url" name="a_v_url">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

  <div id="menu5" class="tab-pane fade">

    <h2 class="text-primary">APPROVAL RECEIVED > 6M</h2>
  <form action="php/ar6_ipo_insert.php" method="post">
    <div class="form-group">
    <label for="company_name">COMPANY NAME</label>
    <input type="text" class="form-control" id="ar_company_name" placeholder="Enter Company Name" name="ar_company_name">
  </div>

<div class="form-group">
    <label for="industry">INDUSTRY NAME</label>
    <input type="text" class="form-control" id="ar_industry" placeholder="Enter Industry Name" name="ar_industry">
  </div>


 <div class="form-group">
    <label for="issue_size">PROPOSED ISSUE SIZE</label>
    <input type="text" class="form-control" id="ar_issue_size" placeholder="Enter Company Type" name="ar_issue_size">
  </div>


<div class="form-group">
    <label for="image_url">IMAGE URL</label>
    <input type="text" class="form-control" id="ar_image_url" placeholder="Enter Image Url" name="ar_image_url">
  </div>

<div class="form-group">
    <label for="company_lot">OVERVIEW URL</label>
    <input type="text" class="form-control" id="ar_overview_url" placeholder="Enter Overview Url" name="ar_overview_url">
  </div>

<div class="form-group">
    <label for="strengths_url">STRENGTHS URL</label>
    <input type="text" class="form-control" id="ar_strengths_url" placeholder="Enter Strengths Url" name="ar_strengths_url">
  </div>

<div class="form-group">
    <label for="risks_url">RISKS URL</label>
    <input type="text" class="form-control" id="ar_risks_url" placeholder="Enter Risks Url" name="ar_risks_url">
  </div>

<div class="form-group">
    <label for="ipo_url">IPO DETAILS TABLE URL</label>
    <input type="text" class="form-control" id="ar_ipo_url" placeholder="Enter IPO Url" name="ar_ipo_url">
  </div>

<div class="form-group">
    <label for="ooi_url">OBJECT OF ISSUE TABLE URL</label>
    <input type="text" class="form-control" id="ar_ooi_url" placeholder="Enter OOI Url" name="ar_ooi_url">
  </div>

<div class="form-group">
    <label for="subscription_url">SUBSCRIPTION TABLE URL</label>
    <input type="text" class="form-control" id="ar_subscription_url" placeholder="Enter Subscription Url" name="ar_subscription_url">
  </div>

<div class="form-group">
    <label for="pl_url">P&L TABLE URL</label>
    <input type="text" class="form-control" id="ar_pl_url" placeholder="Enter P&L Url" name="ar_pl_url">
  </div>

<div class="form-group">
    <label for="bs_url">BALANCE SHEET TABLE URL</label>
    <input type="text" class="form-control" id="ar_bs_url" placeholder="Enter Balance Sheet Url" name="ar_bs_url">
  </div>


<div class="form-group">
    <label for="cf_url">CASH FLOW TABLE URL</label>
    <input type="text" class="form-control" id="ar_cf_url" placeholder="Enter Cash Flow Url" name="ar_cf_url">
  </div>

<div class="form-group">
    <label for="director">DIRECTOR TABLE URL</label>
    <input type="text" class="form-control" id="ar_director_url" placeholder="Enter Balance Sheet Url" name="ar_director_url">
  </div>

<div class="form-group">
    <label for="cc_url">CONNECTED COMPANIES TABLE URL</label>
    <input type="text" class="form-control" id="ar_cc_url" placeholder="Enter Connected Companies Url" name="ar_cc_url">
  </div>

<div class="form-group">
    <label for="pdf_url">INDUSTRY PDF URL</label>
    <input type="text" class="form-control" id="ar_pdf_url" placeholder="Enter PDF Url" name="ar_pdf_url">
  </div>

<div class="form-group">
    <label for="fundamentals_url">Fundamentals Table URL</label>
    <input type="text" class="form-control" id="ar_fundamentals_url" placeholder="Enter Fundamentals Url" name="ar_fundamentals_url">
  </div>

<div class="form-group">
    <label for="sh_url">Share Holding Table URL</label>
    <input type="text" class="form-control" id="ar_sh_url" placeholder="Enter Share Holding Url" name="ar_sh_url">
  </div>

<div class="form-group">
    <label for="v_url">Valuation Table URL</label>
    <input type="text" class="form-control" id="ar_v_url" placeholder="Enter Valuation Url" name="ar_v_url">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>


</div>


</body>

</html>
