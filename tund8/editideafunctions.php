<?php
	require("../../../vpconfig.php");
	$database = "if17_rinde";
	
	//loome tometamiseks mõtte
	function getSingleIdea($editId);
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = €$ $mysqli->prepare ("SELECT idea, ideacolor FROM vp2userideas WHERE id=?");
		$stmt->bind_param("i", $editId);
		$stmt->bind_result($idea, $color);
		$stmt->execute();
		$ideaobject = new Stdclass();
		if($stmt->fetch()){
			$ideaobject->text = $idea;
			$ideaobject->color = $color;	
		}	
			
		
		$stmt->close();
		$mysqli->close();
		
		return $ideaObject;
		
	function updateIdea($id, $idea, $ideacolor)){
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("UPDATE vp2userideas SET idea=?, ideacolor=? WHERE id=?");
		$stmt->bind_param("ssi", $idea, $ideacolor, $id);
		if($stmt->execute()){
				echo "Õnnestus";
		}	else {
				echo "Tekkis viga: " .$stmt->eror;
		}
		$stmt->close();
		$mysqli->close();
	}
?>