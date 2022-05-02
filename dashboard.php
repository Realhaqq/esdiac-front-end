<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Esdiac dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>dashboard</h2>
  
  <h3>Welcome, <?php echo $_SESSION['firstName'];?> <?php echo $_SESSION['lastName'];?></h3>
  <div id="create-account-wrap">
    <p><a href="process.php?logout=true">Logout</a><p>
  </div>
  
</body>
</html>
