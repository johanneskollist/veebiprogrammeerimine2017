<?php
//muutujad
$myName = "Johannes";
$myFamilyName = "Kollist";

$hourNow = date("h");

$schoolDayStart = date("d.m.Y") ." " ."8.15";
//echo $schoolDayStart;
$schoolBegin = strtotime($schoolDayStart);
//echo $schoolBegin;
$timeNow = strtotime("now");
//echo ($timeNow - $schoolBegin);
$minutesPassed = round($timeNow - $schoolBegin) / 60;
echo $minutesPassed;
//echo $hournow;
//võrdlen kellaaega ja annan hinnangu, mis päeva osaga on tegemist (<  >  ==  >=   <=   !=  )
$partOfDay = "";
if ( $hourNow < 8 ){
	$partOfDay = "varajane hommik";
}
//echo $partOfDay
if ( $hourNow >= 8 and $hourNow < 16 ) {
	$partOfDay = "koolipäev";
}
if ( $hourNow >= 16 ) {
	$partOfDay = "vaba aeg";
}
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
	<h1>
	<?php
	echo $myName ." " .$myFamilyName;
	?>
	</h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<?php
	echo "kõige esimene PHP abil väljastatud sõnum.";
	echo "<p> Täna on ";
	echo date ("d.m.Y") . ", käes on " .$partOfDay;
	echo ". <p>" ;
	echo "<p> Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
</body>
</html>