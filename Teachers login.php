<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="login.css"/>
  <title>Teacher's Login form</title>

</head>

<body>
  <div class="container">
    <h2><strong>Login</strong></h2>
    <form action="validate.php" method="post">;

      <div class="form-item">
       <strong> Username:</strong><br><input type="text" name="user" id="user" placeholder="Email or Username"><br><br>
       <strong> Password:</strong><br><input type="password" name="pass" id="pass" placeholder="password"><br><br>
        <button type="submit">LOGIN</button>
      </div>
    </form>
  <strong>New User?</strong><button><a href="teacherregistration.php"> Create Account</a></button>
<p class="text-muted text-center"><small>Copyright © Character Evaluation </small></p>
</body>

</html>