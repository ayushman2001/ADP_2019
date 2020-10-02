<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername,$username,$password);

    if($conn -> connect_error){
        echo "connection failure";
    }

    if($_SERVER['REQUEST_METHOD']=='POST') {
        $conn->query("CREATE DATABASE ". $_POST['db_name']);
        $conn=new mysqli($servername,$username,$password,$_POST['db_name']);
        $conn->query("CREATE TABLE ". $_POST['tb_name'] ."(
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        name varchar(30) NOT NULL,
                        email varchar(50),
                        contact int(11),
                        address varchar(200)
                    )"
                );
        echo "<script>alert('done succesfuly')</script>";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<h1>Form</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="input-form">
            <label for="db_name">Database Name</label>
            <input type="text" name="db_name" required>
        </div>
        <div class="input-form">
            <label for="tb_name">Table Name</label>
            <input type="text" name="tb_name" required>
        </div>
        <button type="submit">Create Table</button>
    </form>
    <a href="q2.php" class="link">go to question 2(summitting the data)</a>
</body>
</html>
