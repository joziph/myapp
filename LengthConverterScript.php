<html>
<head>
<title>Length Converter</title>
</head>
<body>
<form name="frmLengthConverter" action="LengthConverter.php" method="get">
<h2>Length Converter</h2>
Second Prelim Examination
<hr width="350" align="left">
<?php
	$Meter = $_GET["txtMeter"];
	$Centimeter = $Meter * 100;
	$Inch = $Meter * 39.3700787;
	$Yard = $Meter * 1.0936133;
	$Kilometer = $Meter * 0.001;
	$Mile = $Meter * 0.000621371192;

	//echo "User Input: $Meter <br/><br/>";
	echo "Value in Centimeter: $Centimeter <br/>";
	echo "Value in Inch: $Inch <br/>";
	echo "Value in Yard: $Yard <br/>";
	echo "value in Kilometer: $Kilometer <br/>";
	echo "Value in Mile: $Mile";
?>
<hr width="350" align="left">
</form>
<font size="1">
Copyright &copy; 2013<br/>
Mr. Joseph S. Joaquin<br/>
Instructor - Web Programming
</font>
</body>
</html>