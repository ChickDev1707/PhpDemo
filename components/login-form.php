
<?php
    include_once "./login.php";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "./login-form-styling.css">
    <title>Document</title>
</head>

<body>
    
    <form action="" class= "form-box" method= "post">
        <h2>simple login</h2>
        <input type="text" name= "username" placeholder= "username"><br>
        <input type="text" name= "email" placeholder= "email"><br>
        <button name= "submit">submit</button>
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            // click submit
            $userName = $_POST['username'];
            $email = $_POST['email'];

            $sqlStatement = "INSERT INTO demo_user (username, password) VALUES ('$userName', '$email');";
            mysqli_query($connection, $sqlStatement);
        }
    ?>
</body>
</html>