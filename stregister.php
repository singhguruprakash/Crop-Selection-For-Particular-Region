<?php

require_once('connection.php');
require('header.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register form</title>
</head>

<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">

</div>
 
<div class="col-md-8">





<?php
if(isset($_REQUEST['save']))
{		
	if(empty($_REQUEST['fname']))
	{
		echo'<h4 class="text-center text-white">Please Fill  Name!</h4>';
	}
	else
			if(empty($_REQUEST['fadd']))
	{
		echo'<h4 class="text-center text-white">Please Fill Address!</h4>';
	}
	else
if(empty($_REQUEST['fland']))
	{
		echo'<h4 class="text-center text-white">Please Fill Total land!</h4>';
	}
	else
	if(empty($_REQUEST['fmo']))
	{
		echo'<h4 class="text-center text-white">Please Fill Number!</h4>';
	}
	else
	if(empty($_REQUEST['fstate']))
	{
		echo'<h4 class="text-center text-white">Please select State!</h4>';
	}else{
	
	$fname=$_REQUEST['fname'];
	 $fpass=sha1($_REQUEST['fpass']);
	
	$fage=$_REQUEST['fage'];
	 
	$fmo=$_REQUEST['fmo'];
	 
	$fland=$_REQUEST['fland'];
	 
	$fadd=$_REQUEST['fadd'];
	 
	$fgender=$_REQUEST['fgender'];
	 
	$fdist=$_REQUEST['fdist'];
	$fpin=$_REQUEST['fpin'];
	 
	$fvill=$_REQUEST['fvill'];
	 $fstate=$_REQUEST['fstate'];
	$fteh=$_REQUEST['fteh'];
	 
 
		
		$query="insert into farmer_detail(farmer_id,farmer_name,farmer_age,farmer_gender,farmer_address,farmer_state,farmer_district,farmer_tehsheel,farmer_village,farmer_pin,farmer_land,farmer_phone,password)Values(NULL,'".$fname."','".$fage."','".$fgender."','".$fadd."','".$fstate."','".$fdist."','".$fteh."','".$fvill."','".$fpin."','".$fland."','".$fmo."','".$fpass."') ";
		if($conn->query($query))
		{
			echo'<h4 class="text-center text-white">&quot;Registration Successfully Compleated.&quot;</h4>';
		}
		else
		{
			echo"Some Error Occured";
		}
}
}
?>





<div style="height:50px">
</div>
 
<div   style="background:#9CF">
<form class="form-group" method="post">
 
  <h1 class="text-dark text-center " style="padding:20px"><b>Registration </b></h1> <br>

<input class=" form-control " type="text" name="fname" placeholder="Enter Farmer Name"  > <br>
<input class=" form-control  " type="text" name="fage" placeholder="Enter Farmer Age"><br>
<h5 class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" name="fgender" value="male"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Female &nbsp;&nbsp;&nbsp;<input type="radio" name="fgender" value="female"></h5><br> 
<textarea class=" form-control  "  name="fadd" placeholder="Enter Farmer Address" ></textarea><br>
<input class=" form-control " type="bigint" name="fmo" placeholder="Enter Contact Number"><br> 
 <input class=" form-control " type="password" name="fpass" placeholder="Enter New Password"  > <br>
  <input class=" form-control " type="text" name="fstate" placeholder="Enter State name"  >
             <br>
     <input class=" form-control " type="text" name="fdist" placeholder="Enter District"  > <br>
      <input class=" form-control " type="text" name="fteh" placeholder="Enter Tehsheel"  > <br>
       <input class=" form-control " type="text" name="fvill" placeholder="Enter Village Name"  > <br> 
        <input class=" form-control " type="bigint" name="fpin" placeholder="Enter Area Pin"  > <br>  
         <input class=" form-control " type="text" name="fland" placeholder="Enter Total Land(in hectere)"  > <br>    
            
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="save" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd4 btn-block">Submit</button>
                                </div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="reset" name="reset" value="SEND" id="reset" class="btn btn-light btn-radius btn-brd grd4 btn-block">Reset</button>
                                </div>
 
</form>
  
 
 
<div class="col-md-2">
</div></div></div></div></div>
<div style="height:40px">
</div>
 </body>
 </html>
<?php
require('footer.php');
?>
