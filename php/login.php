<html>
<head>
    <title>
    Welcome to Travel Guide
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
            font-weight:bold;
            font-family: cursive;
            padding: 20px;
        }

        h1{
            color: #ffffff;
            font-family: cursive;
        }

        
       
    </style>

</head>

<body>

<?php

$conn = mysqli_connect('localhost','h_joshi','A00433394');

mysqli_select_db($conn, 'h_joshi');

$email = $_POST["email"];
$password = $_POST["pass"];


$select = "select * from User where email='$email' && password='$password'";
$value = mysqli_query($conn, $select);

$resultant_value = mysqli_fetch_array($value);

if ($resultant_value['email'] == $email && $resultant_value['password'] == $password) {
    echo "<h1> You are now logged in </h1>";
}
else{
    echo " <h1> Invalid Request </h1>";
}

mysqli_close($con);

echo " you are now logged in";

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1> Log into your account </h1>

            <form action="" method="POST">
               <p> Email <br><br>
                    <Input type="email" name="email" placeholder="enter your email address" required>
               </p>

               <p> Password <br> <br>
                    <Input type="password" name="password" placeholder="your password here" required>
               </p>

               <p> 
                   <button type="submit" class="btn btn-danger">Log in </button>
               </p>

                <p>
                Don't have an account? <a href="signup.php"> Sign Up here </a>
                <br>
                Want to see the info of existing users? <a href="view.php"> View here </a>
                </p>
            </form>
        </div>
    </div>
</div>


</body>
</html>