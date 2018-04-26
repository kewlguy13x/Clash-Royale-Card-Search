<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Welcome back, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>.</h1>
    </div>
    <p><a href="add.php" class="btn btn-primary">Add Card</a></p>
    <p><a href="delete.php" class="btn btn-primary">Remove Card</a></p>
    <p><a href="edit.php" class="btn btn-primary">Edit Card (in development)</a></p>
    <p><a href="includes/logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>