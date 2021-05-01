 echo'<h3 class="text-center text-info font-weight-bolder">Crop Selection List</h3>
 <table class="table table-bordered">
 
<thead class="bg-warning"><tr >
		<td>Crop ID</td>
    	<td> Crop Name</td>
        <td> Crop Start Month</td>
         <td> Crop End Month</td>
        <td>Crop Soil Type</td>
        <td>Crop Water Resource</td>
        
        
      </tr></thead>';
       
 
$query="select * from crop_details";
$result=$conn->query($query);
if($result->num_rows > 0)
{
	 
	while($row=$result->fetch_assoc())
	{
		echo "<form method=post><input type='hidden' value='". $row['crop_id']."' name='userid' />";	
		echo'<tr class="text-light bg-dark" ><td>';
		
	 
		 echo($row['crop_id']);
		echo'</td> ';
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