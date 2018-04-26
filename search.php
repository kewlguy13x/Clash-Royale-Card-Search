<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script>$(function() {$( "#cards" ).autocomplete({source: 'admin/includes/autocom.php'});});</script>
    
    <style>.align-left { float:left; margin-left: 50px; display:inline-block; padding:0px 20px;}.top-right { position: absolute; top: 18px; right: 25px; z-index: 5; }.wrapper { width: 350px; padding: 20px; }.top-left { position: absolute; top: 18px; left: 25px; z-index: 5; }</style>
    
    <head>
    
        <title>Search Results</title>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    </head>
    
    <body>
    
        <div class="top-right">
    
            <form action="admin/login.php" method="get">
    
                <input type="submit" class="btn btn-primary" value="Panel" name="Login" id="frm1_submit" />
    
            </form>
    
        </div>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
        </head>
    
        <center>
    
            <div class="wrapper">
    
                <a href="index.php">
    
                   <img src="images\crsearch.jpg" alt="Clash Royale" class="img-rounded" />
    
               </a>
    
               <p> </p>
    
                <form action="search.php" method="GET">
    
                    <div class="ui-widget">
    
                        <label for="cards"></label>
                        <input name="query" type="text" id="cards" placeholder="Card Name" class="form-control" /><p> </p><input type="submit" value="Search" class="btn btn-primary" />
    
                    </div>
    
                </form>
    
            </div>
    
        </center>
    
    </body>
</html>
<?php
	error_reporting(0);
    mysql_connect("localhost", "kewlguy13x", "riley000") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("clashroyale") or die(mysql_error());
    $query = $_GET['query']; 
     
    $min_length = 0;
     
    if(strlen($query) >= $min_length){
         
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
        
        $raw_results = mysql_query("SELECT * FROM cards
            WHERE (`name` LIKE '%".$query."%')") or die(mysql_error());

        if(mysql_num_rows($raw_results) > 0){
            while($results = mysql_fetch_array($raw_results)){
                echo "<div class='align-left'>";
                //include 'css/search.css';
                echo "<center>";
                echo "<p><h3>".ucfirst($results['name'])."</h3></p>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['image'] ).'" width="100" />';
                echo "<p> </p>";
                echo "<p>Arena: ".$results['arena']."</p>";
                echo "<p> Cost: ".$results['elixir']."</p>";
                echo "<p>Type: ".$results['type']."</p>";
                echo "<p> Rarity: ".$results['rarity']."</p>";
                echo "</center>";
                echo "</div>";
                //echo "<hr>";
            }
        }
        else{
            echo "<p> </p>";
            echo "<center>";
            echo "<p>No results</p>";
            echo "</center>";
        }
    }
    else{
        echo "<center>";
        echo "<p> </p>";
        echo "<p>Minimum length is ".$min_length;
        echo "</p></center>";
    }
?>