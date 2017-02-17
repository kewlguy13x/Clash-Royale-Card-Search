<?php
	error_reporting(0);
    mysql_connect("localhost", "kewlguy13x", "riley000") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("crimages") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search Results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 0;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM cards
            WHERE (`name` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                include 'css/search.css';
                echo "<center>";
                echo "<p><h3>".$results['name']."</h3></p>";
				echo "<p> </p>";
                echo "<p4>".$results['image']."</p4>";
                echo "<p> </p>";
                echo "<p5>Arena: ".$results['arena']."</p5>";
				echo "<p> </p>";
                echo "<p1> Cost: ".$results['cost']."</p1>";
                echo "<p> </p>";
                echo "<p2> Type: ".$results['type']."</p2>";
                echo "<p> </p>";
                echo "<p3> Rarity: ".$results['rarity']."</p3>";
                echo "</center>";
                // posts results gotten from database(title and text) you can also show id ($results['id']
            }
             
        }
        else{ // if there is no matching rows do following
            echo "<center>";
            echo "<p>No results</p>";
            echo "</center>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>