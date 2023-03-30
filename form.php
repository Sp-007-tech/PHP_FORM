<!DOCTYPE html>

<html lang="en">
<head>
<!--Title -->
    <title> Form Sample ! </title>
    
</head>   
<body>
    
    <?php
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        echo "<br>";
    }
    ?>
    
    <h2>PHP Form </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name"><br><br>
        
    E-mail: <input type="text" name="email"><br><br>
        
    Website: <input type="text" name="website"><br><br>
        
    Comment: <textarea name="comment" rows="5" cols="20"></textarea><br><br>
        
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
        
    <input type="Submit" name="submit" value="Submit">
        
    <?php 
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

    ?>
</body>
</html>
