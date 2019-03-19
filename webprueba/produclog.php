<?php
   include("Config.php");
   session_start();

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
        	
                <li><a href="Logout.php">Logout</a></li>
                <li><a class="selected" >Productos</a></li>
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
			<h2 style="color:white;">Productos</h2>
                        
                        
                        <?php
                        
                        
                        $sql = "call dbweb.productos();";
                        $query = $mysqli->query($sql);
 
                        while($row=mysqli_fetch_array($query)){
                            $id[] = $row['IDproducto'];
                            $producto[] = $row['producto'];
                            $precio[] = $row['precio'];
                        }
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
                        if($_POST["buy"]) {
          
                            $_SESSION['IDpro'] = $id[0];
                            $_SESSION['produc'] = $producto[0];
                            $_SESSION['precio'] = $precio[0];
          
                            header("location: factura.php");
                        }
   
                        if($_POST["buy1"]) {
            
                            $_SESSION['IDpro'] = $id[1];
                            $_SESSION['produc'] = $producto[1];
                            $_SESSION['precio'] = $precio[1];
          
                            header("location: factura.php");
                        }
   
                        if($_POST["buy2"]){
            
                            $_SESSION['IDpro'] = $id[2];
                            $_SESSION['produc'] = $producto[2];
                            $_SESSION['precio'] = $precio[2];
          
                            header("location: factura.php");
        
                        }
      
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
                    <td><form action = "Produclog.php" method = "post">
                    <input type = "submit" name = buy value = "Comprar"/>
                    </form></td>
                </tr>
                <tr>
                    <td><?php echo $id[1]; ?></td>
                    <td><?php echo $producto[1]; ?></td>
                    <td>$<?php echo $precio[2]; ?></td>
                    <td><form action = "Produclog.php?" method = "post">
                    <input type = "submit" name = buy1 value = "Comprar"/>
                    </form></td>
                </tr>
                <tr>
                    <td><?php echo $id[2]; ?></td>
                    <td><?php echo $producto[2]; ?></td>
                    <td>$<?php echo $precio[2]; ?></td>
                    <td><form action = "Produclog.php" method = "post">
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