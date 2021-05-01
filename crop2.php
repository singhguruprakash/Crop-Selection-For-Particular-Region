<?php
require_once('connection.php');
require('header.php');
?>
<center><font size="30px">My Selected Crops</font></center>
<?php
 
	$wres=$_REQUEST['wres'];
	 
$query="select * from crop_details ";
 
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
       
 
 
$result=$conn->query($query);
if($result->num_rows > 0)
{
	 
	while($row=$result->fetch_assoc())
	{
	 	
		 
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
		}
?>




 
 
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">

<?php
require('menu.php');
?>
</div>
<div class="col-md-10"  >
 
 
 </div></div></div></div></div>
<div style="height:40px">

</div>
 </body>
 </html>
<?php
require('footer.php');
?>
