<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!---	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--->
<!---	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --->
<!---	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/calendar.css"/>
	<link rel="stylesheet" href="css/footer.css" />
<!--===============================================================================================-->
<!--===============================================================================================-->
	 <!---<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">  -->

    <!-- Compiled and minified JavaScript -->
  <!---  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</script>
</head>
<body>
<?php include('includes/navbar.php') ?>
<div class="container">

<div class="row">
  <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">


		<ul class="nav nav-tabs">

		<h2 class="animated headShake text-secondary"><strong>IPOs</strong></h2>
		<li class="active ml-3"><a data-toggle="tab" href="#home">CURRENT IPO</a></li>
		<li><a data-toggle="tab" href="#menu1">RECENT IPO</a></li>

		</ul>


 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
		<div class="table-responsive">
	  <table class="table table-bordered table-striped">
        <thead>
        <tr>
        <th scope="col">Company</td>
        <th scope="col">Industry</td>
				<th scope="col">Start Date</td>
				<th scope="col">Close Date</td>
				<th scope="col">Type</td>
				<th scope="col">Price</td>
				<th scope="col">IPO Size</td>
				<th scope="col">Min Lot</td>
				</tr>
        </thead>
        <tbody>
        <?php
            $connect = mysqli_connect("localhost","root", "root","ipo");
            if (!$connect) {
                die(mysql_error());
            }
            $results = mysqli_query($connect,"SELECT ID,COMPANY_NAME,INDUSTRY,START_DATE,END_DATE,TYPE,PRICE,IPO_SIZE,MIN_LOT FROM currentipo LIMIT 10");
            while($row = mysqli_fetch_array($results)) {
            ?>
          <tr>
          <td><a href="details.php?ID=<?php echo $row['ID']?>&t=currentipo"><?php echo $row['COMPANY_NAME']?></a></td>
          <td><?php echo $row['INDUSTRY']?></td>
					<td><?php echo $row['START_DATE']?></td>
					<td><?php echo $row['END_DATE']?></td>
					<td><?php echo $row['TYPE']?></td>
					<td><?php echo $row['PRICE']?></td>
					<td><?php echo $row['IPO_SIZE']?></td>
					<td><?php echo $row['MIN_LOT']?></td>
          </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
					</div>

    </div>

	<div id="menu1" class="tab-pane fade">

		<div class="table-responsive">
		<table class="table table-bordered table-striped">
				<thead>
				<tr>
				<th scope="col">Company</td>
				<th scope="col">Industry</td>
				<th scope="col">Start Date</td>
				<th scope="col">Close Date</td>
				<th scope="col">Type</td>
				<th scope="col">Price</td>
				<th scope="col">IPO Size</td>
				<th scope="col">Min Lot</td>
				</tr>
				</thead>
				<tbody>
				<?php
						$connect = mysqli_connect("localhost","root", "root","ipo");
						if (!$connect) {
								die(mysql_error());
						}
						$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME,INDUSTRY,START_DATE,END_DATE,TYPE,PRICE,IPO_SIZE,MIN_LOT FROM recentipo LIMIT 10");
						while($row = mysqli_fetch_array($results)) {
						?>
					<tr>
					<td><a href="details.php?ID=<?php echo $row['ID']?>&t=currentipo"><?php echo $row['COMPANY_NAME']?></a></td>
					<td><?php echo $row['INDUSTRY']?></td>
					<td><?php echo $row['START_DATE']?></td>
					<td><?php echo $row['END_DATE']?></td>
					<td><?php echo $row['TYPE']?></td>
					<td><?php echo $row['PRICE']?></td>
					<td><?php echo $row['IPO_SIZE']?></td>
					<td><?php echo $row['MIN_LOT']?></td>
					</tr>

				<?php
						}
						?>
						</tbody>
						</table>
					</div>


	</div>
	</div>


  </div>
  <div class="col-md-4 col-ls-4 col-sm-12 col-xs-12">
  <!--calendar--->
  <h2 class="animated headShake text-secondary"><strong>IPO Calendar</strong></h2>
	<div id="calendar" class="animated headShake">
  <h1>JULY</h1>
  <div class="center">
  <table class="table">
	<tr>
	<td>MON</td>

	<td>TUE</td>

	<td>WED</td>

	<td>THU</td>

	<td>FRI</td>

	<td>SAT</td>

	<td>SUN</td>

	</tr>
    <tr><td class="lastmonth">27</td><td class="lastmonth">28</td><td class="lastmonth">29</td><td class="lastmonth">30</td><td class="lastmonth">31</td><td>1</td><td>2</td></tr>
    <tr><td>3</td><td class="red">4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
    <tr><td>10</td><td>11</td><td class="green">12</td><td class="green">13</td><td class="blue">14</td><td>15</td><td>16</td></tr>
    <tr><td class="red">17</td><td class="green">18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td></tr>
    <tr><td class="red">24</td><td>25</td><td class="hastask">26</td><td>27</td><td>28</td><td>29</td><td>30</td></tr>
  </table>
  </div>

</div>
<div class="card">
  <div class="card-body">
   <div class="row">
   <div class="foo green ml-3"></div><p> : Issue Open</p>
   <div class="foo red ml-3"></div><p> : Issue Close</p>
   <div class="foo blue ml-3"></div><p> : Listing</p>
   </div>
  </div>
</div>

  </div>
</div>

<div class="row">
	<div class="col md-6 col-xs-12">
<h2 class="animated headShake text-secondary"><strong>Proposed IPOs</strong></h2>
<ul class="nav nav-tabs">

<li class="active"><a data-toggle="tab" href="#field">FIELD</a></li>
<li><a data-toggle="tab" href="#ar">APPROVAL RECEVIED</a></li>
<li><a data-toggle="tab" href="#ar6">APPROVAL RECEIVED>6M</a></li>


</ul>
		 <div class="tab-content">
		    <div id="field" class="tab-pane fade in active">
				<div class="table-responsive">
			  <table class="table table-bordered table-striped">
		        <thead>
		            <tr>
		        <th scope="col">Company</td>
		        <th scope="col">Industry</td>
						<th scope="col">Propsed Issue Size</td>
		      </tr>
		        </thead>
		        <tbody>
		        <?php
		            $connect = mysqli_connect("localhost","root", "root","ipo");
		            if (!$connect) {
		                die(mysql_error());
		            }
		            $results = mysqli_query($connect,"SELECT ID,COMPANY_NAME,INDUSTRY_NAME,ISSUE_SIZE FROM proposedipo LIMIT 10");
		            while($row = mysqli_fetch_array($results)) {


									$values1[]=$row['ISSUE_SIZE'];
		            ?>

		          <tr>
		          <td><a href="details.php?ID=<?php echo $row['ID']?>&t=proposedipo"><?php echo $row['COMPANY_NAME']?></a></td>
		          <td><?php echo $row['INDUSTRY_NAME']?></td>
							<td><?php echo $row['ISSUE_SIZE']?></td>
							</tr>
  								<?php
		            }
		            ?>
		            </tbody>
		            </table>
							</div>

		    </div>

			<div id="ar" class="tab-pane fade">

				<div class="table-responsive">
				<table class="table table-bordered table-striped">
						<thead>
								<tr>
						<th scope="col">Company</td>
						<th scope="col">Industry</td>
						<th scope="col">Propsed Issue Size</td>
					</tr>
						</thead>
						<tbody>
						<?php
								$connect = mysqli_connect("localhost","root", "root","ipo");
								if (!$connect) {
										die(mysql_error());
								}
								$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME,INDUSTRY_NAME,ISSUE_SIZE FROM approvalr LIMIT 10");
								while($row = mysqli_fetch_array($results)) {

									$values2[]=$row['ISSUE_SIZE'];
								?>

							<tr>
							<td><a href="details.php?ID=<?php echo $row['ID']?>&t=approvalr"><?php echo $row['COMPANY_NAME']?></a></td>
							<td><?php echo $row['INDUSTRY_NAME']?></td>
							<td><?php echo $row['ISSUE_SIZE']?></td>
							</tr>
									<?php
								}
								?>
								</tbody>
								</table>
							</div>

			</div>

			<div id="ar6" class="tab-pane fade">

				<div class="table-responsive">
				<table class="table table-bordered table-striped">
						<thead>
								<tr>
						<th scope="col">Company</td>
						<th scope="col">Industry</td>
						<th scope="col">Propsed Issue Size</td>
					</tr>
						</thead>
						<tbody>
						<?php
								$connect = mysqli_connect("localhost","root", "root","ipo");
								if (!$connect) {
										die(mysql_error());
								}
								$results = mysqli_query($connect,"SELECT ID,COMPANY_NAME,INDUSTRY_NAME,ISSUE_SIZE FROM approvalrec LIMIT 10");
								while($row = mysqli_fetch_array($results)) {

									$values3[]=$row['ISSUE_SIZE'];
								?>

							<tr>
							<td><a href="details.php?ID=<?php echo $row['ID']?>&t=approvalrec"><?php echo $row['COMPANY_NAME']?></a></td>
							<td><?php echo $row['INDUSTRY_NAME']?></td>
							<td><?php echo $row['ISSUE_SIZE']?></td>
							</tr>
									<?php
								}
								?>
								</tbody>
								</table>
							</div>

			</div>


		</div>

	</div>
	<div class="col md-6 col-xs-12">

		<div id="graphContain" class="mt-5">
	<h2 class="ml-5 animated headShake text-secondary"><strong>Performance Forecast</strong></h2>
	<canvas id="my-bar-chart" width="100px" height="70px"></canvas>
		</div>

	</div>
</div>
</div>

<!-- footer starts here---->

<section id="footer">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			</hr>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p> CIN - L67190MH2007249 | Stock Broker SEBI Regn.: INZ000010231 | SEBI RA Regn.: INH000004680 | SEBI Depository Regn.: IN DP CDSL: IN-DP-192-2016 | AMFI REGN No.: ARN-104096</p>
				<p> NSE Member id: 14300 | BSE Member id: 6363 | MCX Member ID: 55945</p>
				<p class="h6">&copy TejaMarket Private Limited. All rights reserved</p>
			</div>
			</hr>
		</div>
	</div>
</section>

</body>
</html>

<script>
var graph=document.getElementById("my-bar-chart");
var values1 = <?php echo json_encode($values1); ?>;
var values2 = <?php echo json_encode($values2); ?>;
var values3 = <?php echo json_encode($values3); ?>;
var sum1=0,sum2=0,sum3=0;
var actual_num1=[];
var actual_num2=[];
var actual_num3=[];
for(var i=0;i<values1.length;i++){
	var numbers1 = values1[i].match(/-?\d+/g);
	actual_num1.push(Number(numbers1[0]));
}

for(var i=0;i<values2.length;i++){
	var numbers2 = values2[i].match(/-?\d+/g);
	actual_num2.push(Number(numbers2[0]));

}

for(var i=0;i<values3.length;i++){
	var numbers3 = values3[i].match(/-?\d+/g);
	actual_num3.push(Number(numbers3[0]));

}


console.log(actual_num1);
console.log(actual_num2);
console.log(actual_num3);

for(var i=0;i<actual_num1.length;i++){
	sum1=sum1+actual_num1[i];
}

for(var i=0;i<actual_num2.length;i++){
	sum2=sum2+actual_num2[i];
}

for(var i=0;i<actual_num3.length;i++){
	sum3=sum3+actual_num3[i];
}

console.log(sum1);
console.log(sum2);
console.log(sum3);


var myChart=new Chart(graph, {
    type: 'bar',
    data: {
      labels:["FIELD","APPROVAL","APPROVAL>6M"],
      datasets: [
        {
          label: "Sum",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data:[sum1,sum2,sum3]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: ' '
      }
    }
});


</script>
