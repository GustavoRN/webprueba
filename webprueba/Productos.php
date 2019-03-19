<?php
   include("Config.php");
   session_start();
   
   $error = "         ";
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if ($_POST["logi"]) { 
      
      $Username = mysqli_real_escape_string($db,$_POST['Usuario']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "call dbweb.IDpro('$Username', '$Password');";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      $_SESSION['IDclien'] = $_POST['Usuario'];
		
      if($count == 1) {
         //session_register("Usuario");
         //$_SESSION['login_user'] = $Username;
         
         header("location: Produclog.php");
      }else {
         $error = "Tu usuario o Contraseña son invalidos";
      } }
   
   
   if($_POST["registro"]) {
     
      $Username = mysqli_real_escape_string($db,$_POST['Usuario']);
      
      $sql = "call dbweb.checID('$Username');";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      $_SESSION['IDclien'] = $_POST['Usuario'];

      
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
   
   if($_POST["buy"]) {
    header("location: login1.php");
   }
   
   if($_POST["buy1"]) {
    header("location: login1.php");
   }
   
   if($_POST["buy2"]){
    header("location: login1.php");
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
                <li><a href="login1.php">Loging</a></li>
                <li><a class="selected" href="Productos.php">Productos</a></li>
         
        </ul>
    </div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div >&nbsp;</div>
    <div id="body">
		<div id="content">
			<h2 style="color:white;">Productos</h2>
                        
                        <?php
                        
                        $sql = "call dbweb.productos();";
                        $query = $mysqli->query($sql);
 
                        while($row=mysqli_fetch_array($query)){
                            $id[] = $row['IDproducto'];
                            $producto[] = $row['producto'];
                            $precio[] = $row['precio'];
                        }

                        ?>

            <table cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Comprar</th>
                    
                </tr>
                <tr>
                    <td><?php echo $id[0]; ?></td>
                    <td><?php echo $producto[0]; ?></td>
                    <td>$<?php echo $precio[0]; ?></td>
                    <td><form action = "Productos.php" method = "post">
                    <input type = "submit" name = buy value = "Comprar"/>
                    </form></td>
                </tr>
                <tr>
                    <td><?php echo $id[1]; ?></td>
                    <td><?php echo $producto[1]; ?></td>
                    <td>$<?php echo $precio[2]; ?></td>
                    <td><form action = "Productos.php" method = "post">
                    <input type = "submit" name = buy1 value = "Comprar"/>
                    </form></td>
                </tr>
                <tr>
                    <td><?php echo $id[2]; ?></td>
                    <td><?php echo $producto[2]; ?></td>
                    <td>$<?php echo $precio[2]; ?></td>
                    <td><form action = "Productos.php" method = "post">
                    <input type = "submit" name = buy2 value = "Comprar"/>
                    </form></td>
                </tr>

            </table>
            <div >&nbsp;</div> 
             <p>Todos nuestros productos cuentan con garantia:</p>
            <ul>
                <li>Compra segura</li>
                <li>Compromisos con el cliente</li>
            </ul>
    
            
        </div>
        
        <div class="sidebar">
            <ul>	

                
                <li>
                	<h4>Iniciar Sesion</h4>
                    <ul>
                    	<li>
                            <form action = "Productos.php" method = "post">
                              <pre>  <label>Usuario  :</label><input type = "text" name = "Usuario" class = "box"/><br /><br /></pre>
                              <pre>  <label>Password :</label><input type = "password" name = "Password" class = "box" /><br/><br /></pre>
                              <pre>  <input type = "submit" name = "registro" value = "Registrar"/>              <input type = "submit" name = "logi" value = "Ingresar"/><br /></pre>

                            </form>	
                            
                            <div style = "font-size:11px; color:#ffffff; margin-top:10px"><?php echo $error; ?></div>
                            
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

