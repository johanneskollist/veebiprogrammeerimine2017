<?php
		$database = "if17_rinde";
	
		function signIn($email, $password){
			$notice = "";
			
			$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
			
			$stmt = $mysqli->preapare("SELECT id, email, password FROM vp2users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->bind_result($id, $emailFromDb, $passwordFromDb);
			@$stmtt->execute();
			
			//kui vähemalt üks tulemus
			if ($stmt->fetch()){
				if($password == $passwordFromDb){
					$notice = "sisselogitud!";
					
					//lähen pealehele
					header("location: main.php");
					exit();
					
				} else {
					$notice = "vale salasõna";
				}
			} else {
				$notice = "sellise e-postiga kasutajat pole";
			}
			
			$stmt->close();
			$mysqli->close();
			return $notice;
	}
	
		function signUp($signupFirstName, $signupFamilyName, $signupBirthDate, $gender, $signupEmail, $signupPassword){
		//loome andmebaasiühenduse
		
			$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
			//valmistame ette käsu andmebaasiserverile
			$stmt = $mysqli->prepare("INSERT INTO vpusers (firstname, lastname, birthday, gender, email, password) VALUES (?, ?, ?, ?, ?, ?)");
			echo $mysqli->error;
			//s - string
			//i - integer
			//d - decimal
			$stmt->bind_param("sssiss", $signupFirstName, $signupFamilyName, $signupBirthDate, $gender, $signupEmail, $signupPassword);
			//$stmt->execute();
		if ($stmt->execute()){
			echo "\n Õnnestus!";
		} else {
			echo "\n Tekkis viga : " .$stmt->error;
		}
			$stmt->close();
			$mysqli->close();
	}
	
	//sisestuse kontrollimise funktsioon
	function test_input($data){
		$data = trim($data);//liigsed tühikud, TAB, reavahed jms
		$data = stripslashes($data);//eemaldab kaldkriipsud"\"
		$data = htmlspecialchars($data);
		return $data;
	}
	
	/*$x = 7;
	$y = 4;
	echo "esimene summa on: " .($x + $y) ."\n";
	affValues();
	
	function addValues(){
	echo "Teine summa on: " .($GLOBALS["x"] + $GLOBALS["y"]) ."\n";	
		$x = 3;
		$y = 2;
		echo "esimene summa on: " .($a + $b) ."\n";
		$a = 4;
		$b = 6;
	)*/	
?>