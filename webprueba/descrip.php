<?php
   include("Config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $idusuario = $_SESSION['IDclien'];
        $idproducto = $_SESSION['IDpro'];
        $producto = $_SESSION['produc'];
        $presio =  $_SESSION['precio'];
        $cantidadre = $_SESSION['cantidad'];
        
        
         $sql =("call dbweb.facturacion('$idusuario', '$idproducto', '$producto', $presio, $cantidadre);");
         $query = $mysqli->query($sql);
         
          while($row=mysqli_fetch_array($query)){
                            $respuesta[] = $row['estado'];
                        }
                        
             if ($respuesta[0]== "APROBADA"){
                 
                 $_SESSION['notificacion'] = "Tu compra se realizo con éxito, gracias";
                 
                 header("location: gracias.php");
                 
             }
             if ($respuesta[0]== "CANSELADA"){
                 
                 $_SESSION['notificacion'] = "Lo sentimos, tu compra no pudo ser procesada";
                 
                 header("location: gracias.php");
                 
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
        	<li><a class="selected" >Home</a></li>
                <li><a href="login1.php">Loging</a></li>
                <li><a href="Produclog.php">Productos</a></li>
                <li><pre style = "font-size:24px; color:#ffffff; margin-top:10px">                    Bienvenido:<?php echo $_SESSION['IDclien']; ?> </pre></li>

                
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
			<h2 style="color:white;">Resumen de Compra</h2>
                            <p style="color:white;">Descripción de tu Compra</p>	
            

            <div >&nbsp;</div>
            <div >&nbsp;</div>
           
            
        
    
            <table cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Comprar</th>
                    
                </tr>
                <tr>
                    <td style="color:white;"><?php echo $_SESSION['IDpro']; ?></td>
                    <td style="color:white;"><?php echo $_SESSION['produc']; ?></td>
                    <td style="color:white;"><?php echo $_SESSION['cantidad']; ?></td>
                    <td style="color:white;"><?php
                    
                    $cant =  $_SESSION['cantidad'];
                    $pre =  $_SESSION['precio'];
                    $_SESSION['total'] = ($cant*$pre);
                    echo $_SESSION['total']; 
                    
                    ?></td>
                    <td><form action = "descrip.php" method = "post">
                    <input type = "submit" name = buy value = "Comprar"/>
                    </form></td>
                </tr>
               

            </table>
            
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
