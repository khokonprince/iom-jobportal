<?php
    include_once 'connection.php';
    include_once 'functions.php';

    session_start();

?>

<!DOCTYPE HTML>
    <html>
<head>
    <title>Login | IOM Job Portal </title>
    <meta charset="utf-8">
    <meta lang="en">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css.map">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<?php
//session_destroy();

if(isset($_SESSION['user_id'])){
    echo $_SESSION['user_id'];
}
    if(isset($_POST['login'])){
        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);


        $error = false;

        if (empty($email)) {
            $error = true;
            $emailError = '<span class="error_msg">Please Enter Email</span>';
        }
        if (empty($password)) {
            $error = true;
            $passlError = '<span class="error_msg">Please Enter Password</span>';
        }

        if(!$error){
            $get_info = "SELECT * FROM userdata WHERE email = '$email' and pass = '$password'";
            $get_info_query = mysqli_query($connection, $get_info);

            $fetchData = mysqli_fetch_array($get_info_query);

            $email = $fetchData['email'];
            $password = $fetchData['pass'];
            $user_id = $fetchData['uid'];

            $infoCount = mysqli_num_rows($get_info_query);

            if($infoCount == 1){
                $_SESSION['user_id'] = $user_id;

                echo $_SESSION['user_id'];

            }else{
                ?>

                <div id="duplicateEmail" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="text-center">
                                    <p class="">Your Email or Password dose not match.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <script>$(document).ready(function () {
                        $('#duplicateEmail').modal('show')
                    });
                </script>

                <?php

                $error = true;
            }
        }


    }
?>

<body class="loginPage">

<?php
    if(loggedin()){
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/jobportal/cv.php" />';
        exit();
        ?>
        <form method="post">
            <input type="submit" name="logout" class="btn btn-warning btn-sm" value="Logout">
        </form>

        <?php

        if(isset($_POST['logout'])){
            echo '<meta http-equiv="refresh" content="0; url=http://localhost/jobportal/jobportal/" />';
            session_destroy();
            exit();
        }
    }else{
?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="login-form">
                <h2 class="text-center">Login</h2>
                <hr/>

                <form method="post">

                    <div class="form-group">
                        <label class="control-label" for="userName">Email</label>
                        <input type="email" name="email" class="form-control input-sm" placehoder="Enter user name" required>
                        <br/> <small><?php if(isset($emailError)) echo $emailError; ?></small>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="text" name="password" class="form-control input-sm" placehoder="Enter Password" required>
                        <br/> <small><?php if(isset($passlError)) echo $passlError; ?></small>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="remember_me" id="remember_me"> <label for="remember_me">Remember me</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-sm" value="Login">
                    </div>

                </form>

                <hr/>

                <p> <small>Don't have an account? <a href="register.php">Register Now!</a></small></p>
                <p> <small>Forgot Password? Reset Password Now!</small></p>
            </div>
        </div>
    </div>
</div>


<?php
    } // End checking if logged in or not
?>

    <!-- Scripts -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
    </html>