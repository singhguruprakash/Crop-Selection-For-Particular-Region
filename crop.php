<?php
require_once('connection.php');
require('header.php');
?>
<?php
if(isset($_REQUEST['save']))
{		
	if(empty($_REQUEST['wres']))
	{
		echo'<h4 class="text-center text-white">Please select water resource!</h4>';
	}
	else{
	$wres=$_REQUEST['wres'];
	$stype=$_REQUEST['stype'];
	 $month=$_REQUEST['month'];
$query="select * from crop_details where crop_water='".$wres."' and crop_start='".$month."'and crop_soil='".$stype."'";
 
		if($conn->query($query))
		{
		 echo'<h3 class="text-center text-info font-weight-bolder">Crop Selection List</h3>
 <table class="table table-bordered">
 
<thead class="bg-warning"><tr >
		 
    	<td> Crop Name</td>
        <td> Crop Start Month</td>
         <td> Crop End Month</td>
        <td>Crop Soil Type</td>
        <td>Crop Water Resource</td>
		<td>Crop Details</td>
		<td>Add Crop</td>        
        
      </tr></thead>';
       
 
$query="select * from crop_details";
$result=$conn->query($query);
if($result->num_rows > 0)
{
	 
	while($row=$result->fetch_assoc())
	{
		echo '<form method="post"><input type="hidden" value="'. $row['crop_id'].'" name="userid" />';	
		 
		echo'<td>';
		echo($row['crop_name']);
		echo'</td> ';
		echo'<td>';
		echo($row['crop_start']);
		echo'</td> ';
		echo'<td>';
		echo($row['crop_end']);
		echo'</td> ';
		echo'<td>';
		echo($row['crop_soil']);
		echo'</td> ';
		 
		echo'<td>';
		echo($row['crop_water']);
		echo'</td >';
		 echo'<td>';
		echo('<form action="#" method="post"><input type="button" name="submit" value="Crop Details" class="btn-secondary"></form>');
		echo'</td >';
		 echo'<td>';
		echo(' <button type="submit" class="btn-secondary">Add Crop</button>');
		echo'</td >';
		 echo'</tr></form>';
				 		
	}
}
else
{
	echo"Data not found.";
}
echo'

</table>
 </div>	'; 
		}
		else
		{
			echo"Some Error Occured";
		}
}
}
 
?>




 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cropselection</title>
</head>

<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu.php');
?>
</div>
 <div class="col-md-8">
<div style="height:50px">
</div>
 
<div   style="background:#9CF">
<form class="form-group" method="post">

 
  <h1 class="text-dark text-center " style="padding:20px"><b>Crop Selection Form </b></h1> <br>
 <select class=" form-control m-2   text-center " name="wres" >
            <option>Water Availability</option>
            <option>maximum Water</option>
                <option>Minimum Water</option>
            <option>Medium Water</option>
            
           </select><br>
 
  <select class=" form-control m-2   text-center " name="stype" >
            <option>Soil Type</option>
            <option>Clay Soil</option>
            <option>Sandy Soil</option>
            <option>slit soil</option>
            <option>loampy soil</option>
            
            </select><br>
 
 
             
            <select class=" form-control m-2   text-center " name="month" >
            <option>Month</option>
            <option>Janurary</option>
            <option>Feburary</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>November</option>
            <option>December</option>
            
            </select><br>
            <select class=" form-control m-2   text-center " name="week" >
            <option>Week</option>
            <option>first week</option>
            <option>second week</option>
            <option>third week</option>
            <option>fourth week</option>
            
            </select><br>
     <input class=" form-control " type="text" name="fdist" placeholder="Enter soil Moisture(in % percentage)"  > <br>
  
        
 
            
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="save" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd4 btn-block">Send</button>
                                </div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="reset" name="reset" value="SEND" id="reset" class="btn btn-light btn-radius btn-brd grd4 btn-block">Reset</button>
                                </div>
 
</form>
  
 
 
 </div></div></div></div></div>
<div style="height:40px">
</div>
 </body>
 </html>
<?php
require('footer.php');
?>
