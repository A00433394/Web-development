<html>
<head>
    <title>
    Sign up with us
    </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("pic.jpg");
            padding: 50px;
        }

        .container{
            background: #000000;
            opacity: 0.8;
            text-align: center;
            padding: 20px;
        }

        p{
            color: #dc3545;
            font-family: cursive;
            padding: 20px;
            font-weight:bold;
        }

        h1{
            color: #ffffff;
            font-family: cursive;
        }
       
    </style>

</head>

<body>

<?php

session_start();

$conn = mysqli_connect('localhost','h_joshi','A00433394');

mysqli_select_db($conn, 'h_joshi');

$name = $_POST["user"];
$email = $_POST["email"];
$number = $_POST["num"];
$password = $_POST["pass"];

$store = "insert into User (name, email, number, password) values ('$name','$email','$number','$password')";
mysqli_query($conn, $store);

mysqli_close($con);

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1> Create your own account </h1>

            <form action="" method="POST">
               <p> User Name <br>
                    <Input type="text" name="user" placeholder="your username here" required>
               </p>

               <p> Email <br> 
                    <Input type="email" name="email" placeholder="your e-mail address" required>
               </p>

               <p> Mobile number <br> 
                    <Input type="number" name="num" placeholder="your phone number" required>
               </p>

               <p> Password <br> 
                    <Input type="password" name="pass" placeholder="your password here" required>
               </p>

               <p> 
                   <button type="submit" class="btn btn-danger">Sign Up</button>
               </p>

                <p>
                Already have an account? <a href="login.php"> Log in here </a>
                <br>
                Want to see the info of existing users? <a href="view.php"> View here </a>
                </p>
            </form>
        </div>
    </div>
</div>


</body>
</html>