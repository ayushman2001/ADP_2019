<?php
session_start();
header("Location: page2.php");

$dbname=$_GET["dbname"];
$tbname=$_GET["tbname"];

$_SESSION["db"]=$dbname;
$_SESSION["tb"]=$tbname;

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
	$createadatabasecmd="CREATE DATABASE $dbname";
	if(mysqli_query($connected,$createadatabasecmd))
	{
		echo "Database created";
	}
	else
	{
		echo "Could not create a database.";
	}

	$createtab="CREATE TABLE $dbname.$tbname(ID INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, NAME VARCHAR(30) NOT NULL, EMAIL VARCHAR(50), CONTACT INT(11), ADDRESS VARCHAR(200));";
	if(mysqli_query($connected,$createtab))
	{
		echo "Table created";
	}
	else
	{
		echo "Couldn't create table";
	}

	$NAME="A";$EMAIL="A@A.COM";
	$CONTACT=000000;$ADDRESS="AA";
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	mysqli_query($connected,$insert);
	$NAME="B";$EMAIL="B@B.COM";
	$CONTACT=111111;$ADDRESS="BB";
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	mysqli_query($connected,$insert);
	$NAME="C";$EMAIL="C@C.COM";
	$CONTACT=222222;$ADDRESS="CC";
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	mysqli_query($connected,$insert);
	$NAME="D";$EMAIL="D@D.COM";
	$CONTACT=111111;$ADDRESS="DD";
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	mysqli_query($connected,$insert);
	$NAME="E";$EMAIL="E@E.COM";
	$CONTACT=000000;$ADDRESS="GG";
	$insert="INSERT INTO $dbname.$tbname(ID, NAME, EMAIL, CONTACT, ADDRESS) VALUES(NULL,'".$NAME."','".$EMAIL."','".$CONTACT."','".$ADDRESS."');";
	mysqli_query($connected,$insert);
}

?>