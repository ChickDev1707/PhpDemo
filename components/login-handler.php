
<?php
    include_once "./dbSetConn.php";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #2c3e50;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .message-box{
            background-color: white;
            width: 150px;
            padding: 30px 20px 50px;
            border-radius: 15px;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        .message-box button{
            border: none;
            cursor: pointer;
            padding: 10px 30px;
            border-radius: 5px;
            font-weight: 600;
            color: white;
            background-color: #27ae60;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<body>
    <div class= "message-box center">
        <h3>You have Logged In!</h3>
        <button onclick= "window.location.href= '../index.php'">OK</button>
    </div>
</body>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        // click submit
        $userName = $_POST['username'];
        $email = $_POST['email'];

        $sqlStatement = "INSERT INTO demo_user (username, password) VALUES ('$userName', '$email');";
        
        mysqli_query($connection, $sqlStatement);
    }
?>
<script>
    
</script>