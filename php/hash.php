<!DOCTYPE html>
<html>
<head>
	<title>
		Hash Decoder 
	</title>
</head>
<body>
<h1><center>Decoding the Thing Up</center></h1>

<form>
<label>Password
	<input type="password" name="pass">
</label>	
<input type="submit" value="submit">



</form>




<?php

if(count($_GET)==1){
$i;$y="Not Found";

for($i=1;$i<=9999;$i++){

$check=hash('md5',(string)$i);
if($check==$_GET["pass"]){

$y=(string)$i;
}

}



echo("PIN: ".$y);
}




?> 





</body>
</html>

