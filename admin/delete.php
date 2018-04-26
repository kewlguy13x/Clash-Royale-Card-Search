<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

require_once 'includes/config.php';
$conn = new mysqli('localhost', 'changeme', 'changeme', 'clashroyale') 
or die ('Cannot connect to db');

    $result = $conn->query("select id, name from cards");

    echo "<html>";
    echo "<title>Card Remover</title>";
    echo "<head>";
    echo "<center>";
    echo "<h1>Card Remover</h1>";
?>
<html><center><img src="..\images\crsearch.jpg" alt="Clash Royale" class="img-rounded"><p> </p></center></html>
<?php
    echo "</head>";
    echo "<body>";
?>
<html><form action="includes/functions/deleter.php" method="GET"></html>
<?php
    echo "<select name='name'> ";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['name']; 
                  echo '<option value="'.$name.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "<center>";
    echo "<p> </p>";
?>
		<input type="submit" value="Delete!" class="btn btn-primary"/>
		<p> </p>
    </form>
		<FORM METHOD="LINK" ACTION="panel.php" >
		<INPUT TYPE="submit" VALUE="Return" class="btn btn-danger">
    </center>
</body>
</html>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Card Remover</title>
    <center>
    <p> </p>
	<h1>Card Remover</h1>
    <img src="images\crsearch.jpg" alt="Clash Royale">
    <p> </p>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css\search.css"/>
</head>
<body>
    <form action="deleter.php" method="GET">
        <input type="text" name="name" />
		<p> </p>
		<input type="submit" value="Delete!" />
		<p> </p>
    </form>
		<FORM METHOD="LINK" ACTION="admin.php">
		<INPUT TYPE="submit" VALUE="Admin Panel">
    </center>
</body>
</html>