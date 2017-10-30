<?php
	require("functions.php");
	require("editideafunctions.php");
	
	$notice = "";
	$ideas = "";
	
	//kui pole sisse logitud, liigume login lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//väljalogimine
	if(isset($_GET["logout"])){
		session_destroy(); //lõpetab sessiooni
		header("Location: login.php");
	}
	
	//kas vajutati mõtte salvestamise nuppu
	if(isset($_POST["ideaBtn"])){
		
		if(isset($_POST["userIdea"]) and isset($_POST["ideaColor"]) and !empty($_POST["userIdea"]) and !empty($_POST["ideaColor"])){
			//echo $_POST["ideaColor"];
			$notice = saveIdea(test_input($_POST["userIdea"]), $_POST["ideaColor"]);
		}
	}
	
	$ideas = getSingleIdea($_GET["id"]);
	
	//kui klõpsati uuendamise nuppu
	if(isset($_POST["update"]){
		
	}	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Johannese veebiprogemise asjad
	</title>
</head>
<body>
	
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<p><a href="?logout=1">Logi välja</a></p>
	<p><a href="userideas.php">Tagasi mõtete lehele</a></p>
	<h2>Head mõtete toimetamine</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<input name="id" type="hidden" value=<?php echo $_GET["id"]; ?>> 
		<label>Hea mõte: </label>
		<textarea name="userIdea"></textarea>
		<br>
		<label>Mõttega seostuv värv: </label>
		<input name="ideaColor" type="color" value="<?php echo $idea->text; ?>">
		<br>
		<input name="ideaBtn" type="submit" value="Salvesta mõte!"><span><?php echo $notice; ?></span>
	</form>
	<hr>
	
	
</body>
</html>
