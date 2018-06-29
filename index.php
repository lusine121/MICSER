<?php
    include ("home.php");
    $response = validation ($_POST);
    foreach ($response as $key => $value){
        if(!$value["isValid"]) {
            echo "<li>";
            echo $key . " " . $value["message"];
            echo "</li>";
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="./bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css.map" >
    <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    <script src="./bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" >

    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 2px none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>
<div class="container">
<form id="form" action="home.php">
        <h1><b>Registration Form<b></h1>
        <h3>Please fill in this form to create an account.</h3>
        <hr>
        <label for="text"><b>First Name</b></label>
        <input type="text" placeholder="First Name" name="firstname" value="<?php echo isset($_POST['firstname'])?$_POST['firstname']:''?>" required /> <br />
        <br />
        <label for="text"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="lastname" value="<?php echo isset($_POST['lastname'])?$_POST['lastname']:''?>" required> <br />
        <br />
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" required> <br />
        <br />
        <label for="text"><b>Login</b></label>
        <input type="text" placeholder="Enter Login" name="login" value="<?php echo isset($_POST['login'])?$_POST['login']:''?>" required> <br />
        <br />
        <label for="psw"><b>Password</b></label>
        <br />
        <input type="password" placeholder="Enter Password" name="password" value="<?php echo isset($_POST['password'])?$_POST['password']:''?>" required> <br />
        <br />
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <br />
        <input type="password" placeholder="Repeat Password" name="psw-repeat" value="<?php echo isset($_POST['rpassword'])?$_POST['rpassword']:''?>" required> <br />
        <br />
        <label for="text"><b>Country</b></label>
        <br />
                <?php
                include "elementCountries.php"
                ?>
                <br />
                <br />
        Gender:<br />
        <input type="radio" name="Gender" placeholder="Male" /> Male<br />
        <input type="radio" name="Gender" placeholder="Female" /> Female<br />
        <br />
        <label for="text"><b>Description</b></label>
        <br />
        <textarea rows="8" name="comments" placeholder="Write something" value="<?php echo isset($_POST['comments'])?$_POST['comments']:''?>"></textarea> <br />
        <br />
        <button type="submit" class="btn btn-success">Register</button>
    </div>
</form>
</body>
</html>