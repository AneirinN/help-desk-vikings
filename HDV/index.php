<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>AT&T Pebble Beach Junior Golf Assoc. Signup</title>
    <link rel="shortcut icon" href="./img/logo.png" />

    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
<div>

    <h2>Click here to sign up: </h2>
     <form action="signup.php" method="post">
         <input type="submit" name="loginForm" value="Sign Up" />
    </form>

    <h1>OR</h1>

    <h1>Administrator Sign In:</h1>
    
    <form action="login.php" method="post">
        Username <input type="text" name="username"> <br/> <br/>
        Password <input type="password" name="password"><br/> <br/>
        <input type="submit" name="loginForm" value="Login!" />
    </form>


    <h3 id="error">
        <?php

      if (isset($_GET['error'])) {


          echo $_GET['error'];
      }
      ?>

    </h3>

</div>

</body>
</html>