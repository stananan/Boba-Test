<?php
    $email = $_POST['email-val'];
    $pranked = "GET PRANKED";
    
    $success = mail($email, $pranked, $pranked);
    if($success){
        echo "<script>alert('Email was sent');</script>";
    }else{
        echo "<script>alert('Email was not sent');</script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boba test</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <script src="main.js"></script>
</head>
<body>
    <div class='header'><h1>Welcome to my Boba Test</h1><h2>Created by Stanley Ho</h2></div>

    <?php
        require_once("header.php");
        //printHeader();
        //var_dump($_POST);
        foreach($_POST as $key => $val){
            if(is_array($val)){
                echo "<p>". $key . " :</p>";
                foreach($val as $valofval){
                    echo "<p>" . htmlspecialchars($valofval) . "</p";
                    echo "<br>";
                }
                echo "<br>";
            }else{
                echo "<p>". $key . " :" . htmlspecialchars($val) . "</p";
                echo "<br>";
            }
            
        }
    ?>
</body>
</html>