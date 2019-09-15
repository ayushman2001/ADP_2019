<?php
session_start();

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

if($status)
{
	$data="SELECT * FROM $dbname.$tbname";
	echo "ID ";
	echo "NAME ";
	echo "EMAIL ";
	echo "CONTACT ";
	echo "ADDRESS";
	while($output=mysqli_fetch_assoc(mysqli_query($connected,$data)))
	{
	echo $output["ID"];
	echo " ";
	echo $output["NAME"];
	echo " ";
	echo $output["EMAIL"];
	echo " ";
	echo $output["CONTACT"];
	echo " ";
	echo $output["ADDRESS"];
	echo "<br>";
	}

}

?>