<?php
   include("Config.php");
   session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
   
        
        
        
            $_SESSION['cantidad']  = $_POST["cant"];  
            
            header("location: descrip.php");
   
   
        
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
                            <p style="color:white;">Elige la cantidad de articulos que deceas</p>	
            

            <div >&nbsp;</div>
            <div >&nbsp;</div>
           
            
        
    
            <table cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio U</th>
                    <th>Cantidad</th>
                    <th>Comprar</th>
                    
                </tr>
                <tr>
                    <td style="color:white;"><?php echo $_SESSION['IDpro']; ?></td>
                    <td style="color:white;"><?php echo $_SESSION['produc']; ?></td>
                    <td style="color:white;"><?php echo $_SESSION['precio']; ?></td>
                    <form action = "factura.php" method = "post">
                    <td style="color:black;"> <select id =" cantidad" name = "cant" > 
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
                        </td>
                        <td>
                    <input type = "submit" name = buy value = "Siguiente"/>
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
