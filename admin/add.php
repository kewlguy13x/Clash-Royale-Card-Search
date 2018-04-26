<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
    <title>Card Adder</title>
    <center>
    <p> </p>
	<h1>Card Adder</h1>
    <img src="..\images\crsearch.jpg" alt="Clash Royale" class="img-rounded">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
</style>
<div class="wrapper">
<body>
    <form action="includes/functions/adder.php" method="GET">
        <input type="text" name="name" placeholder="Name" class="form-control" />
        <p> </p>
        <input type="number" name="elixir" placeholder="Cost" class="form-control" />
        <p> </p>
        <select name="arena" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
          <option value="" disabled selected hidden>Arena</option>
          <option value="Training Camp">Training Camp</option>
          <option value="Goblin Stadium (1)">Goblin Stadium (1)</option>
          <option value="Bone Pit (2)">Bone Pit (2)</option>
          <option value="Barbarian Bowl (3)">Barbarian Bowl (3)</option>
          <option value="P.E.K.K.As Playhouse (4)">P.E.K.K.As Playhouse (4)</option>
          <option value="Spell Valley (5)">Spell Valley (5)</option>
          <option value="Builders Workshop (6)">Builders Workshop (6)</option>
          <option value="Royal Arena (7)">Royal Arena (7)</option>
          <option value="Frozen Peak (8)">Frozen Peak (8)</option>
          <option value="Jungle Arena (9)">Jungle Arena (9)</option>
          <option value="Hog Mountain (10)">Hog Mountain (10)</option>
          <option value="Electro Valley (11)">Electro Valley (11)</option>
          <option value="Legendary Arena (12)">Legendary Arena (12)</option>
        </select>
		<!--<p> </p>-->
        <!--<input type="text" name="type" placeholder="Type" />-->
        <p> </p>
        <select name="type" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
          <option value="" disabled selected hidden>Card Type</option>
          <option value="Troop">Troop</option>
          <option value="Spell">Spell</option>
          <option value="Building">Building</option>
        </select>
		<!--<p> </p>-->
        <!--<input type="text" name="rarity" placeholder="Rarity" />-->
		<!--<p> </p>-->
        <select name="rarity" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
          <option value="" disabled selected hidden>Rarity</option>
          <option value="Common">Common</option>
          <option value="Rare">Rare</option>
          <option value="Epic">Epic</option>
          <option value="Legendary">Legendary</option>
        </select>
		<p> </p>
		  <input type="file" name="image" id="image"/>
    <p> </p>
		<input type="submit" value="Add!" class="btn btn-primary" />
    </form>
    <p> </p>
	<FORM METHOD="LINK" ACTION="panel.php">
	<INPUT TYPE="submit" VALUE="Return" class="btn btn-danger">
    </form>
  </center>
</body>
</div>
</html>