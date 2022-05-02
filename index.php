<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Esdiac Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" method="POST" action="process.php">
  
    <p>
    <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>

    <p>
    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit"  value="Login" name="login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="register.php">Create Account</a><p>
  </div>
  
</body>
</html>
