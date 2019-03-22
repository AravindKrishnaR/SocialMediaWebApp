<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/login.css">
</head>
<body>

<h2>Login</h2>

<form action="/login.php">
  <div class="imgcontainer">
    <img src="Images/img_02.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#ffffff">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="#">Forgot Password?</a></span>
  </div>
</form>

</body>
</html>