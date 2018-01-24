<?php

$result;

function check($comp,$player){

if($player==0){

	return ("Please Select Your Option ") ;
	
}

if($player==1){

if($comp==1){
	return "TIE" ;
}
if($comp==2){
	return "You Lose" ;
}
if($comp==3){
	return "You Win" ;
}

}

if($player==2){
if($comp==1){
	return "You Win" ;
}
if($comp==2){
	return "Tie" ;
}
if($comp==3){
	return "You lose" ;
}

}
if($player==3){
if($comp==1){
	return "You Lose" ;
}
if($comp==2){
	return "You Wim" ;
}
if($comp==3){
	return "Tie" ;
}

}



}

if(!isset($_GET["name"])){

	die("Name parameter missing");

}

if(isset($_POST["Logout"])){

	header("Location: index.php");
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>The Game</title>
</head>
<body>

<h1><center>Rock Paper Scissors</center></h1>
<p> <center> <strong>Welcome <?= $_GET["name"] ?> </strong> </center> </p>

<form method="post"> 
<select name="human">
<option value="0"> ..Select </option>
<option value="1"> Stone </option>	
<option value="2"> Paper </option>	
<option value="3"> Scissors </option>	
<option value="3"> Test </option>
</select>
<input type="submit" name="Play" value="Play">
<input type="submit" name="Logout" value="Logout">
</form>

<?php

if(isset($_POST["Play"])){

$x=rand(1,3);

echo(check($x,$_POST["human"]));


}
?>




</body>
</html>