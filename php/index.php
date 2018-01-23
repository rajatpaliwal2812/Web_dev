<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>
		Rajat Paliwal PHP
	</title>
</head>
<body>


<h1> Rajat Paliwal Doing PHP  </h1>
<pre>
	8	

</pre>


<?php 

print "The Sha Hash is: ".hash('sha256','Rajat Paliwal');

echo ("<h1>\n");
print "The Sha Hash is: ".hash('sha256','Rajat Paliwal');
echo ("</h1>\n");

$arr=array(1);
$brr=array("A"=>1,"B"=>12);
$i;
for($i=0;$i<10;$i++){

	$arr[$i]=$i*$i;
	echo ("$arr[$i] " );
	
}
echo("<br>");
foreach ($brr as $key => $value) {
	
	echo ("Key : $key , Value : $value");
	echo("<br>");
}



?>




</body>
</html>


