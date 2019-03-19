<?php
   include("Config.php");
   session_start();
   
   $error = "         ";
   
   $_SESSION['IDclien'] = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if ($_POST["logi"]) { 
      
      $Username = mysqli_real_escape_string($db,$_POST['Usuario']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "call dbweb.IDpro('$Username', '$Password');";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {

         
         header("location: Produclog.php?_IDuser2=$Username");
      }else {
         $error = "Tu usuario o Contraseña son invalidos";
      } }
   }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {


   if($_POST["registro"]) {
      $Username = mysqli_real_escape_string($db,$_POST['Usuario']);
      
      $sql = "call dbweb.checID('$Username');";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
         
          $error = "Cuenta Existente, Selecciona otro Usuario";
         
      }
       else {
            
            $Usuario = $_POST['Usuario'];
            $Pass = $_POST['Password'];
            $result = $mysqli->query("call dbweb.IDregis('$Usuario','$Pass')");
    
            header("location: loging.php");
    
      
      }
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
        	<li><a class="selected" href="index.php">Home</a></li>
                <li><a href="login1.php">Loging</a></li>
                <li><a href="Productos.php">Productos</a></li>
         
        </ul>
    </div>
    <div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div id="body">
		<div id="content">
			<h2 style="color:white;">SESIÓN CERRADA</h2>
            <p style="color:white;">La sesión se ha cerrado satisfactoriamente, vuelve pronto</p>	
            

           
        </div>
        
        <div class="sidebar">
            <ul>	

                
                
                <li>
                	<h4>Iniciar Sesion</h4>
                    <ul>
                    	<li>
                            <form action = "Logout.php" method = "post">
                              <pre>  <label>Usuario  :</label><input type = "text" name = "Usuario" class = "box"/><br /><br /></pre>
                              <pre>  <label>Password :</label><input type = "password" name = "Password" class = "box" /><br/><br /></pre>
                              <pre>  <input type = "submit" name = "registro" value = "Registrar"/>              <input type = "submit" name = "logi" value = "Ingresar"/><br /></pre>
                            
                            </form>	
                            <a href="loging.php?Username=Usuario"></a>

                        
                            <pre><div style = "font-size:11px; color:#ffffff; margin-top:10px"><?php echo $error; ?></div></pre>
                            
                             


			</li>
                    </ul>
                </li>

                
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