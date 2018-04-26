<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   
    <script>$(function() {$( "#cards" ).autocomplete({source: 'admin/includes/autocom.php'});});</script>
   
    <style>body { font: 14px sans-serif; }.top-right { position: absolute; top: 18px; right: 25px; z-index: 5; }.wrapper { width: 350px; padding: 20px; }.top-left { position: absolute; top: 18px; left: 25px; z-index: 5; }</style>
    
    <head>
        
        <title>Search</title>
            
            <div class="top-right">
                
                <form action="admin/login.php" method="get">
                    
                    <form action="admin/login.php" method="get"><input type="submit" class="btn btn-primary" value="Panel" name="Login" id="frm1_submit" /></form>
        	    
        	    </form>
            
            </div>
        
        <p> </p>
           
           <center>
               
               <a href="index.php">
                 
                   <img src="images\crsearch.jpg" alt="Clash Royale" class="img-rounded" />
               
               </a>
           
           </center>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    </head>
    
    <body>
       
        <center>
           
            <div class="wrapper">
            
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