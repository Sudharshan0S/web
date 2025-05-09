<!DOCTYPE html>
<html>
<head><title>Display Server Time</title>
<meta http-equiv="refresh" content="1"/>
<style>
p {
	border:5px solid green ;
	padding:10px;
	width:80%;
	height:80%;
	background-color:red;
	color:blue;
	text-align:center;
	font-size: 40px;
}


</style>




</head>

<body onload="showdate()">
	
	

	<?php
		date_default_timezone_set("Asia/Kolkata");
		echo '<p id="server-date"> '.date("h:i:sa").'</p>' ;

	?>



</body>
</html>
