$(document).ready(function(){

console.log(ipo);
console.log(ooi);
console.log(overview);
console.log(subs);
console.log(pl);
console.log(bs);
console.log(cf);
console.log(director);
console.log(cc);
console.log(funda);
console.log(sh);
console.log(vt);

get_overview();
get_risks();
get_strengths();
get_IPO_details();
get_OOI();
get_subscription();
get_PL();
get_bal();
get_cf();
get_directors();
get_funda();
get_valuation();
get_share();
getconnected();
setInterval(function(){get_subscription();}, 1000);
});

function get_overview(){

	$.ajax({
	url:overview,
	dataType:"text",
	success:function(data){
								var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
								$("#overview").html(htmlLines);
}
});
}

function get_risks(){

	$.ajax({
	url:risks,
	dataType:"text",
	success:function(data){
								var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
								$("#risks").html(htmlLines);
}
});

}

function get_strengths(){

	$.ajax({
	url:strengths,
	dataType:"text",
	success:function(data){
								var lines = data.split('\n'),
                htmlLines = '<p>' + lines.join('</p><p>') + '</p>';
								$("#strengths").html(htmlLines);
}
});

}

function get_IPO_details(){

	$.ajax({
	url:ipo,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var table_data = '<table class="table" id="customers">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(";");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(cell_count%2==0){
	table_data+='<td><b>'+cell_data[cell_count]+'</b></td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td></b>';
	}
	}
	table_data+='</tr>';
	}
	table_data+='</table>';
	$('#ipo_details_table').html(table_data);
	}
	});

}

function get_OOI(){

	$.ajax({
	url:ooi,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var table_data = '<table class="table" id="customers">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(cell_count%2==0){
	table_data+='<td><b>'+cell_data[cell_count]+'</b></td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td></b>';
	}
	}
	table_data+='</tr>';
	}
	table_data+='</table>';
	$('#ooi_table').html(table_data);
	}
	});

}

function get_subscription(){

$.ajax({
url:subs,
dataType:"text",
success:function(data){
var employee_data=data.split(/\r?\n|\r/);
var table_data = '<table class="table" id="customers">';
var update='<h4 class="font-weight-light text-center">'+employee_data[0]+'</h4>';
for(var count=1;count<employee_data.length;count++){
var cell_data = employee_data[count].split("~~");
table_data+='<tr>';
for(var cell_count=1;cell_count<cell_data.length;cell_count++){
if(cell_count%2==0){
table_data+='<td>'+cell_data[cell_count]+'</td>';
}
else{
table_data+='<td><b>'+cell_data[cell_count]+'</td></b>';
}
}
table_data+='</tr>';
}
table_data+='</table>';
$('#employee_table').html(table_data);
$('#last-updated').html(update);
}
});
}

function get_PL(){
$.ajax({
url:pl,
dataType:"text",
success:function(data){
var employee_data=data.split(/\r?\n|\r/);
var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#GraphContent"><i class="far fa-chart-bar"></a></td>'
var table_data = '<table class="table" id="custom">';
for(var count=0;count<employee_data.length;count++){
var cell_data = employee_data[count].split(",");
table_data+='<tr>';
for(var cell_count=0;cell_count<cell_data.length;cell_count++){
if(count==0){
	table_data+='<td>'+cell_data[cell_count]+'</td>';
}
else{
table_data+='<td>'+cell_data[cell_count]+'</td>';
}
}
if(count==0){
	table_data+='</tr>';

}else{
	table_data+=button;
	table_data+='</tr>';
}
}
table_data+='</table>';
$('#new-table').html(table_data);
}
});
}


function get_bal(){

	$.ajax({
	url:bs,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#GraphContent"><i class="far fa-chart-bar"></a></td>'
	var table_data = '<table class="table" id="custom">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(count==0){
		table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	}
	if(count==0){
		table_data+='</tr>';
	}else{
		table_data+=button;
		table_data+='</tr>';
	}
	}
	table_data+='</table>';
	$('#balance-table').html(table_data);
	}
	});
}

function get_cf(){

	$.ajax({
	url:cf,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#GraphContent"><i class="far fa-chart-bar"></a></td>'
	var table_data = '<table class="table" id="custom">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(count==0){
		table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	}
	if(count==0){
		table_data+='</tr>';

	}else{
		table_data+=button;
		table_data+='</tr>';
	}
	}
	table_data+='</table>';
	$('#cf-table').html(table_data);
	}

	});
}

function get_directors(){

$.ajax({
url:director,
dataType:"text",
success:function(data){
var employee_data=data.split(/\r?\n|\r/);
var table_data = '<table class="table" id="customers">';
var update='<p class="font-weight-light">'+employee_data[0]+'</p>'
for(var count=0;count<employee_data.length;count++){
var cell_data = employee_data[count].split(",");
table_data+='<tr>';
for(var cell_count=0;cell_count<cell_data.length;cell_count++){
if(cell_count%2==0){
table_data+='<td>'+cell_data[cell_count]+'</td>';
}
else{
table_data+='<td>'+cell_data[cell_count]+'</td>';

}
}
table_data+='</tr>';
}
table_data+='</table>';
$('#financial-table').html(table_data);
}

});
}


function get_funda(){

	$.ajax({
	url:funda,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#PeerGraph"><i class="far fa-chart-bar"></a></td>'
	var table_data = '<table class="table" id="custome">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(count==0){
		table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	}
	if(count==0){
		table_data+='</tr>';
	}else{
		table_data+=button;
		table_data+='</tr>';
	}
	}
	table_data+='</table>';
	$('#fundamentals-table').html(table_data);
	}

});
}


function get_share(){

	$.ajax({
	url:sh,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#PeerGraph"><i class="far fa-chart-bar"></a></td>'
	var table_data = '<table class="table" id="custome">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(count==0){
		table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	}
	if(count==0){
		table_data+='</tr>';
	}else{
		table_data+=button;
		table_data+='</tr>';
	}
	}
	table_data+='</table>';
	$('#share-table').html(table_data);
	}

});
}



function get_valuation(){

	$.ajax({
	url:vt,
	dataType:"text",
	success:function(data){
	var employee_data=data.split(/\r?\n|\r/);
	var button='<td class="text-center"><a class="bt" data-toggle="tab" href="#PeerGraph"><i class="far fa-chart-bar"></a></td>'
	var table_data = '<table class="table" id="custome">';
	for(var count=0;count<employee_data.length;count++){
	var cell_data = employee_data[count].split(",");
	table_data+='<tr>';
	for(var cell_count=0;cell_count<cell_data.length;cell_count++){
	if(count==0){
		table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	else{
	table_data+='<td>'+cell_data[cell_count]+'</td>';
	}
	}
	if(count==0){
		table_data+='</tr>';
	}else{
		table_data+=button;
		table_data+='</tr>';
	}
	}
	table_data+='</table>';
	$('#value-table').html(table_data);
	}

});
}

function getconnected(){


	$.ajax({

	        url: cc,
	        dataType: "text",
	        success: function(data) {

						var arr1=[];
						var arr2=[];
						var comp=[];
						var lines = data.split("\n");

						for (var i = 0; i < lines.length; i++) {
		 				var _firstColumn = lines[i].split(",")[0];
						arr1.push(_firstColumn);
					}

				for (var i = 0; i < lines.length; i++) {
				var _secondColumn = lines[i].split(",")[1];
				arr2.push(_secondColumn);
						}

				var item='<ul class="list-group">';
				for(var i=0;i<arr1.length;i++){

				for(var j=i;j<arr2.length;j++){
					if(!comp.includes(arr1[i])){

					if(arr1[i]==arr1[j]){
						item+=' <li class="list-group-item">'+arr1[j]+'<i class="fas fa-arrows-alt-h fa-lg"></i>'+arr2[j] +'</li>'
						console.log(arr1[j]+"-->"+arr2[j]);

					}
				}

				}
				comp.push(arr1[i]);
				}
				item+='</ul>'
				$('#connected-companies').html(item);
					}
		});
}
