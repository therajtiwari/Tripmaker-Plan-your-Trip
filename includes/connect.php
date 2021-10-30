<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","travels","3306");
	if(mysqli_connect_errno())
	{
		die("failed to connect to mysqli:".mysqli_connect_error());
	} else {
		echo "Successful";
	}
	return $cn;
}
makeconnection();
?>