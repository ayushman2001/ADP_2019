<?php
session_start();

header("Location: page2.php");

$dbname=$_SESSION['db'];
$tbname=$_SESSION['tb'];

$hostname="localhost";
$username="root";
$password="";

$connected=mysqli_connect($hostname,$username,$password);

$status=false;
if($connected){
	$status=true;
}

$NAME=$_GET["name"];
$EMAIL=$_GET["email"];
$CONTACT=$_GET["cont"];
$ADDRESS=$_GET["addrs"];

if($status)
{
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	if(mysqli_query($connected,$insert))
		echo "Inserted";

}

?>