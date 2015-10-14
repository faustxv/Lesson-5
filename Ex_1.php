<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    	<?php 
    		$form = '<form class="form-inline" role="form" method="POST">
								  <div class="form-group">
								    <label class="sr-only" for="exampleInputlogin">Login</label>
								    <input type="text" name="login" class="form-control" id="exampleInputlogin" placeholder="Enter login">
								  </div>
								  <div class="form-group">
								    <label class="sr-only" for="exampleInputPassword2">Password</label>
								    <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
								  </div>
								  <button type="submit" name="sub" class="btn btn-default">Sign up</button>
								</form>';
    		$login = 'admin';
    		$pass  = 'qwerty';
    		session_start();
    		if (isset($_POST['sign_out'])) {
    			session_destroy();
					header('location:/Ex_1.php' );
    		}
    		if (isset($_POST['sub'])) {
    			$_SESSION['login'] = $_POST['login'];
    			$_SESSION['pass'] = $_POST['pass'];
     		}		
    		if (isset($_SESSION['login'])&& isset($_SESSION['pass'])) {
    		 	if ($_SESSION['login'] == $login && $_SESSION['pass'] == $pass) {
    				echo '<h1>Welcome!</h1>';
    				echo '<form method="POST"><button type="submit" name="sign_out" class="btn btn-default">Sign out</button></form>';
    			}
    			else{ 
    				echo 'Wrong username or password.<br>';
    				echo $form;
    			}
    		}
    		else echo $form;
			?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>