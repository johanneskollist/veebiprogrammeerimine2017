<?php
//muutujad
$myName = "Johannes";
$myFamilyName = "Kollist";
$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "november", "oktoober", "detsember"];

//var_dump($monthNamesEt);

//echo $monthNamesEt  [3];
$monthNow = $monthNamesEt[date("n")- 1];

$hourNow = date("h");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Johannes Kollist veebiprogemise asjad
	</title>
</head>
<body>
	
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<h2>Foto ülikoolist</h2>
	<img src="../../pics/tlu_15.jpg" alt="Tallinna Ülikool">
	
</body>
</html>