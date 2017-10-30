<?php
//muutujad
$myName = "Johannes";
$myFamilyName = "Kollist";
$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "november", "oktoober", "detsember"];

//var_dump($monthNamesEt);

//echo $monthNamesEt  [3];
$monthNow = $monthNamesEt[date("n")- 1];

$hourNow = date("h");

$schoolDayStart = date("d.m.Y") ." " ."8.15";
//echo $schoolDayStart;
$schoolBegin = strtotime($schoolDayStart);
//echo $schoolBegin;
$timeNow = strtotime("now");
//echo ($timeNow - $schoolBegin);
$minutesPassed = round($timeNow - $schoolBegin) / 60;
//echo $minutesPassed;
//echo $hournow;
//võrdlen kellaaega ja annan hinnangu, mis päeva osaga on tegemist (<  >  ==  >=   <=   !=  )
$partOfDay = "";
//if ( $hourNow < 8 ){
	$partOfDay = "varajane hommik";

//echo $partOfDay
//if ( $hourNow >= 8 and $hourNow < 16 ) {
	$partOfDay = "koolipäev";

//if ( $hourNow >= 16 ) {
	$partOfDay = "vaba aeg";
	

	//vanusega seotud muutujad
	$myAge = 0;
	$ageNote = "";
	$myBirthYear;
	$yearsOfMyLife = "";
	
	//echo $_POST;
	//var_dump($_POST);
	//echo $_POST{"birthYear"};
	//arvutame vanuse
	if ( isset($_POST["birthYear"]) and $_POST["birthYear"] != 0){
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST{"birthYear"};
		//echo $myAge;
		$ageNote ="<p>Te olete umbes " .$myAge ." aastat vana.</p>";
		
		$yearsOfMyLife = "<ol> \n";
		$yearNow = date("Y");
		for ($i = $myBirthYear; $i <= $yearNow; $i ++){
			$yearsOfMyLife .= "<li>" .$i ."</li> \n";
		}
		$yearsOfMyLife .= "</ol> \n";
		
	}
	
	
	//lihtne tsükkel
	/*for ($i = 0; $i < 5; $i ++){
			echo "ha";
	}*/
	
	
	
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
	echo date ("d.") .$monthNow .date(" Y") . ", käes on " .$partOfDay;
	echo ". <p>" ;
	echo "<p> Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
	<h2> Räägime vanusest</h2>
	<p>Sisesta oma sünniaasta, arvutame vanuse!</p>
	<form method='POST'>
		<label>Teie sünniaasta: </label>
		<input name="birthYear" id="birthYear" type="number" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		
		<input id="submitBirthYear" type="submit" value="kinnita">
		
	</form>
	<?php
		if ( $ageNote != "") {
			echo $ageNote;
		}

		if ( @yearsOfMyLife !=""){
				echo "\n <h3> Olete elanud järgmistel aastatel</h3> \n" . $yearsOfMyLife;
		}
		
	?>
</body>
</html>