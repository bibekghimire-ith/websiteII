<?php 
ob_start();
session_start();
  if(isset($_POST['done'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '19319') {
      $_SESSION['user'] = $username;
      header('location:mydashboard.php');
      ob_end_flush();
    } else {
      PRINT '<script type="text/javascript">alert("Incorrect username or password...");</script>';
      header('location:index.php');
    }
  }
?>



<!DOCTYPE html>
<html>
<head>

	<title>Bibek Ghimire Portfolio</title>
<!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel = "stylesheet" src = "{{ url_for('static', filename = 'bootstrap.min.css') }}">
	<script type = "text/javascript" src = "{{ url_for('static', filename = 'bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src = "{{ url_for('static', filename = 'jquery-3.4.1.js') }}"></script>
<style media="screen">
  * {
box-sizing: border-box;
}

*:focus {
outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
header{
margin: 0px auto;
width: 1240px;
background: #bd3b0f;
text-align: center;
font-size: 48px;
padding-bottom: 20px;
margin-bottom: 30px;
}
b{
font-size: 48px;
font-family: 'Comic Sans MS';
/*text-shadow: 3px 2px red;*/
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
border: 2px solid transparent;
background: #3498DB;
color: #ffffff;
font-size: 16px;
line-height: 25px;
padding: 10px 0;
text-decoration: none;
text-shadow: none;
border-radius: 3px;
box-shadow: none;
transition: 0.25s;
display: block;
width: 250px;
margin: 0 auto;
}

.btn:hover {
background-color: #2980B9;
}

.login-link {
font-size: 12px;
color: #444;
display: block;
margin-top: 12px;
}

footer{
margin: 0px auto;
width: 1240px;
text-align: center;
font-weight: bold;
background: #bd3b0f;
margin-top: 1em;
min-height: 4em;
}
</style>
<body>


  <div style="background-color: #666633;">
  	<header><b>My Portfolio Dashboard</b></header>
  </div>


  <form action="" method="POST">
  <div class="login">
  <div class="login-screen">
  <div class="app-title">
  <h1>Login</h1>
  </div>
  <div class="login-form">
  <div class="control-group">
  				<input type="text" class="login-field" value="" placeholder="username" name="username">
  <label class="login-field-icon fui-user" for="login-name"></label></div>
  <div class="control-group">
  				<input type="password" class="login-field" value="" placeholder="password" name="password">
  <label class="login-field-icon fui-lock" for="login-pass"></label></div>
  <input type="submit" value="Log in" class="btn btn-primary btn-large btn-block" name="done">

  </div>
  </div>
  </div>
  </form>

  <footer class="text text-center fixed-bottom"><br><span>Bibek Ghimire &copy; 2020</span></footer>


</body>
</html>
