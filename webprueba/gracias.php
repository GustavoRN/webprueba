<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if($_POST["salir"]) {
        header("location: Logout.php");
         }
   
        if($_POST["compra"]) {
        header("location: produclog.php");
        }
      
   }
?>


<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>aphotic - Free CSS Template by spyka Webmaster</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="/">MarketPlace</a></h1>
        <div class="clear"></div>
    </div>
    
    <div id="nav">
    	<ul>
        	<li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a class="selected" href="Produclog.php">Productos</a></li>
                
        </ul>
    </div>
    <div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div id="body">
        <a href="loging.php?IDuser=<?php echo $_SESSION['IDclien']; ?>">
		<div id="content">
                    <div >&nbsp;</div>
                    <div >&nbsp;</div>
                    <div >&nbsp;</div>
			<h2 style="color:white;"><?php echo $_SESSION['notificacion']; ?>!</h2>
          
                        <div >&nbsp;</div>
                        <div >&nbsp;</div>
                        <div >&nbsp;</div>
                        
                        <form action = "gracias.php" method = "POST">
                             <pre>         <input  type = "submit" name = "salir" value = "Salir">                      <input type = "submit" name = "compra" value = "Seguir Comprando"/><br /></pre>
                            
                            </form>	
                        
                        <div >&nbsp;</div>
                        <div >&nbsp;</div>
                        <div >&nbsp;</div>
           
        </div>
        
       
    	<div class="clear"></div>
    </div>
    
    

    <div id="footer">
        <div class="footer-content">
        	<p>Marketplace Example</p>
        </div>
    </div>
</div>
<div >&nbsp;</div>
<div >&nbsp;</div>
<div >&nbsp;</div>
</body>
</html>
