<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Johannes Kollist veebiprogemise asjad
	</title>
</head>
<body>
	<h1>Johannes Kollist</h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<?php
	echo "kõige esimene PHP abil väljastatud sõnum.";
	echo "<p> Täna on ";
	echo date ("d.m.Y");
	echo ". <p>" ;
	echo "<p> Lehe avamise hetkel oli kell " .date ("h:i:s") .".</p>";
	?>
</body>
</html>