<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/9/2019
 * Time: 2:09 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="bootstarp/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

</head>
<body>

<div class="sidenav" style="height: 700px ; margin: 10px;border-radius: 10px ; width: 34%" >
    <div class="login-main-text" >
        <h2 style="font-family: 'Merriweather', serif; ">  Capital Z POS System</h2>
        <p>  </p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">


            <form>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <a href="main/Dashbord.php"> <button type="button" class="btn btn-black">Login</button></a>
                <button type="button" class="btn btn-secondary">Register</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>