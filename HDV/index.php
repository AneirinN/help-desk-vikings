<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">



        <title>AT&T Pebble Beach Junior Golf Assoc. Signup</title>



        <!--    <link rel="icon" href="img/favicon.ico">-->
        <link rel="shortcut icon" href="img/logo.png" />

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!--        <link href="css/styles.css" rel="stylesheet" />-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="container">

            <img src="img/logo.png" class="img-responsive" alt="Logo">

            <h2 class="form-signin-heading">Click here to sign up: </h2>
            <form action="queryLesson.php" method="post" class="form-signin">
                <!--  <input type="submit" name="queryLesson" value="Sign Up" />-->
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="queryLesson">Login</button>
            </form>

            <form action="signup.php" method="post" class="form-signin">
                <!--  <input type="submit" name="loginForm" value="Sign Up" />-->
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Login</button>
            </form>

            <h3> class="form-signin-heading">OR</h3>

            <h1 class="form-signin-heading">Administrator Sign In:</h1>

            <form action="login.php" method="post" class="form-signin">
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

                <!-- <input type="submit" name="loginForm" value="Login!" />-->
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginForm">Login</button>
                <!--
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                -->


            </form>


            <h3 id="error">
                <?php

              if (isset($_GET['error'])) {


                  echo $_GET['error'];
              }
              ?>

            </h3>

        </div> <!-- /container -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
         -->

    </body>
</html>