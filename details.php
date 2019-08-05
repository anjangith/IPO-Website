<?php
 session_start();
 include('includes/fetch_data.php');
 $_SESSION['c_name']=$company_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TEJA</title>
	<meta charset="UTF-8">
	<meta name="description" content="Finance Website">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">                 BOOTSTRAP css--->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!---<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>                           BOOTSTRAP JS----->
	<script src="js/excel-table.js"></script>
	<script src="js/jspdf.js"></script>
	<script src="js/pdfFromHTML.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://kit.fontawesome.com/fa5eca6328.js"></script>
  <link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/html2canvas.js"></script>
	<script src="js/html2canvas.min.js"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>                                    JQUERY---->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/table-style.css"/>
    <link  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

</head>

<body>
<!---INCLUDE PHP NAVBAR------------------>
	<?php
		 include("includes/navbar.php");
	?>


<div class="col-md-2 col-sm-2 col-xs-12">
						<!---Place for Adds------>
</div>

<!---MAIN CONTENT STARTS HERE---->
<div class="col-md-8 col-sm-12 col-xs-12">
<!---FIRST ROW------>
	<div class="row">
  <div class="col-md-8 col-sm-12 col-xs-12">
	<div class="d-flex flex-column">
  <div class="p-2">
	<div class="containe">

		  <h1 class="animated fadeInDown text-secondary"><strong><?php echo $company_name ?></strong></h1>
		  <br>
			<!---NAVBAR TABS------>
		  <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
		  <li><a data-toggle="tab" href="#menu1">Financials</a></li>
			<li><a data-toggle="tab" href="#management">Management</a></li>
		  <li><a data-toggle="tab" href="#menu2">Ratings</a></li>
		  <li><a data-toggle="tab" href="#industry">Industry</a></li>
			<li><a data-toggle="tab" href="#peertracking">Peer Tracking</a></li>
		  </ul>

			<!---TAB CONTENTS FOR MAIN PAGE----->
		  <div class="tab-content">
		  <br>
			<!---OVERVIEW TAB---->
			<div id="home" class="tab-pane fade in active">
		  <img src="<?php echo $img_url ?>" alt=" " class="img-thumbnail">
			<br><br>
      <div class="row">
        <div class="card animated fadeInLeft" style="width: 100%">
          <div class="card-body">
            <h3 class="card-title"><strong>OVERVIEW</strong></h3>
              <div id="overview" class=""></div>
                </div>
                  </div>
                    </div>


      <div class="row ">
        <div class="card" style="width: 100%">
          <div class="card-body">
            <h3 class="card-title"><strong>RISKS</strong></h3>
              <div id="risks" class=""></div>
                </div>
                  </div>
                    </div>

                    <div class="row">
                      <div class="card" style="width: 100%">
                        <div class="card-body">
                          <h3 class="card-title"><strong>STRENGTHS</strong></h3>
                            <div id="strengths" class=""></div>
                              </div>
                                </div>
                                  </div>

    </div>

			<!---finance tab starts here--->
		  <div id="menu1" class="tab-pane fade">
			<div class="containe">
			<!---TABS FOR FINANCE PAGE------->
			<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#P">P/L</a></li>
				    <li><a data-toggle="tab" href="#BalanceSheet">Balance Sheet</a></li>
				    <li><a data-toggle="tab" href="#CashFlow">Cash Flow</a></li>
			</ul>
			<!---TAB CONTENT FOR FINANCE PAGE---->
			<div class="tab-content">
			<!---p&L TAB--------->
			<div id="P" class="tab-pane fade in active">
			<div class="table-responsive">
			<!---P&L TABLE STARTS HERE---->
			<div id="new-table"></div>
			</div>
			</div>

			<!---BALANCE SHEET TAB--------->
			<div id="BalanceSheet" class="tab-pane fade">
			<div class="table-responsive">
			<div id="balance-table"></div>
			</div>
			</div>

			<!---CASH FLOW TAB--------->

			<div id="CashFlow" class="tab-pane fade">
			<div class="table-responsive">
			<div id="cf-table"></div>
			</div>
			</div>

			<!---Graph Content FOR FINANCIAL TAB ----->
			<div id="GraphContent" class="tab-pane fade">
			<div class="d-flex flex-column">
			<div class="p-2">
			<div class="d-flex justify-content-start"> </div>
			<div class="d-flex justify-content-end">
			<a data-toggle="tab" href="#P">	<i class="fas fa-arrow-circle-left fa-fw"></i></a>
			</div>
			</div>
			<div class="p-2">
			<div id="graphContainer">
			<canvas id="bar-chart" width="450" height="200"></canvas>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

			<!---MANAGEMENT TAB--------->
		   </div>
			 <div id="management" class="tab-pane fade">
			 <div class="d-flex flex-column">
			 <div class="p-2">
       <h3>DIRECTORS</h3>
			 <br>
			 <div class="table-responsive">
			 <div id="financial-table">
			 </div>
			 </div>
			 </div>
			 <div class="p-2">
			 <h3>Connected Companies</h3>
			 <!---CONNECTED COMPANIES LOGIC PANEL--->
			 <div id="connected-companies">
			 </div>
			 </div>
		 	 </div>
			 </div>


			 <!---RATINGS TABS------>
		    <div id="menu2" class="tab-pane fade">
				</div>


				<!---INDUSTRY TAB----->
		    <div id="industry" class="tab-pane fade">
		    <h3>Industry</h3>
				<!---PDF VIEWER----->
				<div class="pdfcontainer">
				<embed src="<?php echo $pdf ?>" type="application/pdf" width="100%" height="800px"/>
				</div>
				</div>


				<!---PEER-TRACKING TAB------>
				<div id="peertracking" class="tab-pane fade">
				<div class="containe">
				<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#fundamentals">Fundamentals</a></li>
						<li><a data-toggle="tab" href="#shareholding">ShareHolding</a></li>
						<li><a data-toggle="tab" href="#valuation">Valuation</a></li>
				</ul>

					<!---TAB CONENT FOR PEER TRACKING TAB TAB'S-->
					<div class="tab-content">

					<!---FUNDAMENTALS TAB----->
					<div id="fundamentals" class="tab-pane fade in active">
					<h4>Fundamantels</h4>
					<div class="table-responsive">
					<div id="fundamentals-table">
					</div>
					</div>
					</div>

					<!---SHAREHOLDING TAB------>
					<div id="shareholding" class="tab-pane fade">
					<h4>Shareholding</h4>
					<div class="table-responsive">
					<div id="share-table">
					</div>
					</div>
					</div>

					<!---VALUATION TAB----->
					<div id="valuation" class="tab-pane fade">
					<h4>Valuation</h4>
					<div class="table-responsive">
					<div id="value-table">
					</div>
					</div>
					</div>

					<!-----GRAPH FOR PEER TRACKING TABS----->
					<div id="PeerGraph" class="tab-pane fade">
					<div class="d-flex flex-column">

								<div class="p-2">
								<div class="d-flex justify-content-start"> </div>
								<div class="d-flex justify-content-end">
								<a data-toggle="tab" href="#fundamentals">	<i class="fas fa-arrow-circle-left fa-fw"></i></a>
								</div>
								</div>
							  <div class="p-2">
								<div id="graphPeerContainer">
								<canvas id="bar-chart-peer" width="450" height="200"></canvas>
								</div>
							  </div>
								</div>
						</div>
					</div>
				</div>
				</div>
		  	</div>
				</div>
				</div>




</div>
</div>

<!---SECOND COLUMN FOR FIXED TABLES------>
  <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">


  <div class="table-responsive animated fadeInRight">
		<div class="col-xs-12">
			<h4 class="font-weight-light text-center"><?php echo $company_name ?> IPO Details:</h4>
			<div id="ipo_details_table"></div>
</div>
</div>



<div class="table-responsive animated fadeInRight">
	<div class="col-xs-12">
		<h4 class="font-weight-light text-center">Objects of Issue</h4>

<div id="ooi_table"></div>

</div>
</div>



<div class="table-responsive animated fadeInRight">
	<div class="col-xs-12">

  <table class="table" id="customers">
<h4 class="font-weight-light text-center">SUBSCRIPTION</h4>

  <tr>
    <td> </td>
    <td><b>QIB</b></td>
	    <td><b>NI</b></td>
		    <td><b>HNI Total</b></td>
  </tr>
  <tr>
     <td><b>Day1</b></td>
    <td> </td>
	    <td> </td>
		    <td> </td>
  </tr>
  <tr>
     <td><b>Day2</b></td>
    <td></td>
	    <td></td>
		    <td></td>
  </tr>
  <tr>
     <td><b>Day3</b></td>
    <td></td>
	    <td></td>
		    <td></td>
  </tr>


  </table>


</div>
</div>


   <div class="table-responsive animated fadeInRight">
		 <button class="btn btn-light navbare"  onclick="HTMLtoPDF()"><i class="fas fa-download"></i></button>

  <div id="HTMLtoPDF">
   <div id="last-updated">
   </div>
	<div id="main-Div">
    <div id="employee_table">
		</div>
    </div>
  </div>
	</div>
 </div>
</div>

<h1>Comments</h1>
<?php

		include("includes/footer.php");

 ?>
</div>

<div class="col-md-2 col-sm-2 col-xs-12">

</div>



</body>
</html>
<script type="text/javascript">

var overview="<?php echo $overview_url; ?>";
var risks="<?php echo $risks; ?>";
var strengths="<?php echo $strengths; ?>";
var ipo="<?php echo $ipo; ?>";
var ooi="<?php echo $ooi; ?>";
var subs="<?php echo $subs; ?>";
var pl="<?php echo $pl; ?>";
var bs="<?php echo $bs; ?>";
var cf="<?php echo $cf; ?>";
var director="<?php echo $director; ?>";
var cc="<?php echo $cc; ?>";
var pdf="<?php echo $pdf; ?>";
var funda="<?php echo $funda; ?>";
var sh="<?php echo $sh; ?>";
var vt="<?php echo $vt; ?>";





//var h1,h2,h3,h4,h5,col1,col2,col3,col4,col5;
$(document).on("click",'#custom .bt',function(){
resetCanvas();
var ga1=document.getElementById("bar-chart");
var $hrow=$("#custom tr:first");
var $hrow1=$hrow.find('td');
var h1=$hrow1.eq(1).text();
var h2=$hrow1.eq(2).text();
var h3=$hrow1.eq(3).text();
var h4=$hrow1.eq(4).text();
var h5=$hrow1.eq(5).text();

var $row = jQuery(this).closest('tr');
var $columns = $row.find('td');
var col1 = $columns.eq(1).text();
var col2 = $columns.eq(2).text();
var col3 = $columns.eq(3).text();
var col4 = $columns.eq(4).text();
var col5 = $columns.eq(5).text();


var myChart=new Chart(ga1, {
    type: 'bar',
    data: {
      labels: [h1, h2, h3, h4, h5],
      datasets: [
        {
          label: "  ",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [col1,col2,col3,col4,col5]
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
});

var resetCanvas = function(){
  $('#bar-chart').remove(); // this is my <canvas> element
  $('#graphContainer').append('<canvas id="bar-chart" width="450" height="200"></canvas>');

};

var resetPeerCanvas = function(){
  $('#bar-chart-peer').remove(); // this is my <canvas> element
  $('#graphPeerContainer').append('<canvas id="bar-chart-peer" width="450" height="200"></canvas>');

};


$(document).on("click",'#custome .bt',function(){
resetPeerCanvas();
var $hrow=$("#custome tr:first");
var $hrow1=$hrow.find('td');
var h1=$hrow1.eq(1).text();
var h2=$hrow1.eq(2).text();
var h3=$hrow1.eq(3).text();
var h4=$hrow1.eq(4).text();
var h5=$hrow1.eq(5).text();

var $row = jQuery(this).closest('tr');
var $columns = $row.find('td');
var col1 = $columns.eq(1).text();
var col2 = $columns.eq(2).text();
var col3 = $columns.eq(3).text();


new Chart(document.getElementById("bar-chart-peer"), {
    type: 'bar',
    data: {
      labels: [h1, h2, h3],
      datasets: [
        {
          label: " ",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [col1,col2,col3]
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
});

$(document).ready(function(){

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"includes/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"includes/fetch_comment.php",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });

 });

</script>
