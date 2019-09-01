<!DOCTYPE html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        require 'libphp-phpmailer/class.phpmailer.php';
        require 'libphp-phpmailer/class.smtp.php';
        $mail = new PHPMailer;
        $mail->setFrom('admin@example.com');
        $mail->addAddress('dipanshu231099@gmail.com');
        $mail->Subject = 'group 10 assignment 2';
        $mail->Body = 'Form details below 
                        First Name: '. $_POST['firstname']. '
                        Last Name: '. $_POST['lastname'] . '
                        Email: '. $_POST['email'] . '
                        telephone: '.$_POST['telephone-number'] . '
                        Comments: ' . $_POST['msg'] .'
                        ' ;
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 465;

        //Set your existing gmail address as user name
        $mail->Username = "rannneeti19@gmail.com";

        //Set the password of your gmail address here
        $mail->Password = 'dipanshu23';
        if(!$mail->send()) {
        echo 'Email is not sent.';
        echo 'Email error: ' . $mail->ErrorInfo;
        } else {
        echo '<script>alert("Email has been sent.")</script>';
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <div class="input-form">
            <label for="firstname">First Name*</label>
            <input name="firstname" type="text" placeholder="Dipanshu" required>
        </div>
        <div class="input-form">
            <label for="lastname">Last Name*</label>
            <input name="lastname" type="text" placeholder="Verma" required>
        </div>
        <div class="input-form">
            <label for="email">Email Address*</label>
            <input name="email" type="email" placeholder="dipanshu231099@gmail.com" required>
        </div>
        <div class="input-form">
            <label for="telephone-number">Telephone Number</label>
            <input name="telephone-number" type="number" placeholder="9041118938" required>
        </div>
        <div class="input-form">
            <label for="msg">Comments*</label>
            <textarea name="msg" cols="102" rows="10" required>Hi,

My group number is 10.
This is a solution to the 2nd assignment question</textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
    <br>
<form action="index.php" method="GET">
    <label>Print JSON file content: </label>
    <input type="submit" name="print_Json" value="print_Json" />
</form>
<br>
<?php
    if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['print_Json']))
    {
        func();
    }
    function func()
    {
        $data = file_get_contents("wizard.json");
    // var_dump($json_file);

    $wizards = json_decode($data, true);
    // var_dump($wizards);
    // echo "<br/><br/>";
    // echo $wizards[0]["name"]."<br/><br/>";

    foreach ($wizards as $wizard)
    {
        $txt = sprintf("%s's wand is %s, %s, with a %s core.", $wizard["name"], $wizard["wand"][0]["wood"], $wizard["wand"][0]["length"], $wizard["wand"][0]["core"]);
        echo $txt."<br/>";
    }   
    }
?>
</body>
</html>
