<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <form class="form-signin" name="login" action="login_sub.php" method="post">
        <h1 class="text-center">Sign in</h1>
        <p>
          <label class="sr-only">User Name</label>
          <input type="text" name="user_name" placeholder="Email address" class="form-control" required autofocus>
        </p>
        <p>
          <label class="sr-only">Password</label>
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </p>
        <p class="checkbox">
          <label><input type="checkbox">Remember me</label>
        </p>

        <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Sign in</button>
      </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>
