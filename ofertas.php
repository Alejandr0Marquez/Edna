<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/Styles.css">
   <link rel="stylesheet" href="css/estilos.css">
   <!-- custom js file link  -->
   <script src="js/script.js" defer></script>

</head>

<body>
    
        <nav class="menu">
		<a href="index.html">Home</a>
        <a href="carrito.php">Carrito</a>
	    </nav>

        <div class="container">
            
        <div class="products-container">

            <?php include 'db.php'; ?>
           
        <?php 
            $sql="SELECT * FROM productos";
            $result=mysqli_query($conn,$sql);

            while($mostrar=mysqli_fetch_array($result))
         {
            ?>
            <div class="product">
                <img src="images/2.png">
                <h4><?=$mostrar['producto']?></h4>
                <p><?=$mostrar['paquete']?></p>
                <p>$<?=$mostrar['precio']?></p>
                <a href="agregar_carrito.php?id=<?=$mostrar['codigo']?>">Agregar al carrito</a>
            </div>
        <?php
        }

    ?>
    
</body>
</html>