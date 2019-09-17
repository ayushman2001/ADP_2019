<?php
session_start();

$dbname=$_SESSION['db'];
$tbname=$_SESSION['tb'];

$hostname="localhost";
$username="root";
$password="";

$mysqli = new mysqli($hostname, $username, $password, $dbname); 
$query = "SELECT * FROM $tbname";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NAME</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">CONTACT</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["NAME"];
        $field3name = $row["EMAIL"];
        $field4name = $row["CONTACT"];
        $field5name = $row["ADDRESS"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 

?>