<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Esdiac Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>Register</h2>
  <form id="login-form" method="POST" action="process.php">
  
  <p>
    <input type="text" id="firstName" name="firstName" placeholder="first Name" required><i class="validation"><span></span><span></span></i>
    </p>

    <p>
    <input type="text" id="lastName" name="lastName" placeholder="last Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>

    <p>
    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>

    <p><select name="country" required>
        <option >Select Country</option>
        <option>Nigeria</option>
        <option value="USA">USA</option>
    </select></p>

    <p>
    <input type="submit"  value="Register" name="register">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Already a member? <a href="index.php">Login now</a><p>
  </div>
  
</body>
</html>
