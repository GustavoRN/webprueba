<?php
   include("Config.php");
   session_start();
   

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
       if ($_POST["actualizar"]) {
       
      
      $user2 =  $_SESSION['IDclien'];
      $nombre = $_POST['nombre'] ;
      $apellido = $_POST['apellido'];
      $dirc = $_POST['dir'];
      $pais = $_POST['pais'];
      $ciudad = $_POST['ciudad'];
      $cp= $_POST['cp'];
      $result = $mysqli->query("call dbweb.IDcomp( '$user2', '$nombre', '$apellido', '$dirc', '$pais', '$ciudad', '$cp');");

        header("location: Produclog.php");
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
                <li><a class="selected">Loging</a></li>
                <li><a href="Productos.php">Productos</a></li>
                <li><pre style = "font-size:24px; color:#ffffff; margin-top:10px">                    Bienvenido:<?php echo $_SESSION['IDclien']; ?> </pre></li>
         
        </ul>
    </div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div id="body">

        
		<div id="content">
			<h1 style="color:white;">Informacion del Usuario</h1>
                        
                        <p style="color:white;">Completa tu registro rellenando la informacion complementaria </p>	
            
                        <form action = "loging.php" method = "POST">
                              <pre>  <label style="color:white;">NOMBRE   :</label><input type = "text" name = "nombre" class = "box"/><br /><br /></pre>
                              <pre>  <label style="color:white;">APELLIDO :</label><input type = "text" name = "apellido" class = "box" /><br/><br /></pre>
                              <pre>  <label style="color:white;">DIRECCION:</label><input type = "text" name = "dir" class = "box" /><br/><br /></pre>
                              <pre>  <label style="color:white;">PAIS     :</label><input type = "text" name = "pais" class = "box" /><br/><br /></pre>
                              <pre>  <label style="color:white;">CIUDAD   :</label><input type = "text" name = "ciudad" class = "box" /><br/><br /></pre>
                              <pre>  <label style="color:white;">CP       :</label><input type = "text" name = "cp" class = "box" /><br/><br /></pre>
                              <pre>                                             <input type = "submit" name = "actualizar" value = "Siguiente"/><br /></pre>

                        </form>
         
        </div>
        
        <div class="sidebar">
            <ul>	

                
                
               
                

                
            </ul> 
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
