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
	<h2>Mõned lingid</h2>
	<p>Õpime <a href="http://www.tlu.ee">Tallinna Ülikoolis</a>. </p>
	<p>Minu esimene php-leht on <a href="../esimene.php">siin</a>.</p>
	<p>Minu sõbra Joonase leht on <a href="../../../~masijoon/veebiprogrammeerimine">siin</a>. </p>
	<p> Pilte ülikoolist näeb <a href="foto.php">siin</a>.</p>
	
</body>
</html>