<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	<title >
		The Guess Game 
	</title>
</head>

<body>

<?php

echo"<h1> <center>"; echo"Welcome To The Guessing Game Person"; echo "</center><br>";
if(count($_GET)==0){
	echo("Missing Guess Parameter");
}
elseif(!is_numeric($_GET['guess'])){
	echo "Your guess is not a number" ;
}
elseif($_GET['guess']<20){
	echo "Your guess is too low" ;
}
elseif($_GET['guess']>20){
	echo "Your guess is too high" ;
}
elseif($_GET['guess']==="20"){
	echo "Congratulations - You are right" ;
}

echo("</h1>");

?>




</body>


</html>