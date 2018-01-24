<?php

$flag=false;
$olduser="";
$oldpass="";
$message="";
$check="password";

if(isset($_POST['cancel'])){
	header("Location: login.php");


}
if(isset($_POST["submit"])){
	if(strlen($_POST["who"]) <1 || strlen($_POST["pass"])<1  ){
		$message="User name and password are required :";
		$flag=true;
}
else{

$olduser=$_POST["who"];
$oldpass=$_POST["pass"];
if($_POST["pass"]==$check && $_POST["who"]=="rajatpaliwal2812"){
	$flag=false;
	header("Location: game.php?name=".urlencode($_POST['who']));
}
else{$flag=true;
$message="Incorrect Username OR Password :";

}

}

}









?>



<html>
<head>
	<title>
		Login Information
	</title>
</head>
<body>

	<h1> User Authentication</h1>
	<?php
		if($flag===true){

			echo ('<h3 style="color:red">'.$message.'</h3>');

		}

	?>
	<form method="post" >
	<label>  Name &nbsp &nbsp &nbsp :<input type="text" name="who" placeholder="username" value="<?= $olduser ?>" >   </label> <br>	<br>
	<label>  Password :<input type="password" name="pass" placeholder="password"  value="<?= $oldpass ?>">   </label> <br><br>
	<input type="submit"  name="submit" >
	<input type="submit"  name="cancel" value="Cancel" >	

	</form>



</body>
</html>