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
        $sql="SELECT * FROM carrito";
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_array($result))
        {
            $res = mysqli_query($conn, "SELECT * FROM productos WHERE codigo = '" .$row['id_producto'] ."'");
            $mostrar = mysqli_fetch_array($res);
        ?>
        <div class="product">
            <img src="images/2.png">
            <h4><?=$mostrar['producto']?></h4>
            <p><?=$mostrar['paquete']?></p>
            <p>$<?=$mostrar['precio']?></p>
            <a href="agregar_carrito.php?borrar=<?=$row['id']?>">Borrar</a>
        </div>
        <?php
        }

    ?>
  
 
 
  <form action="pagar.php" method="post">
                <tbody style="font-size: x-large;">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row['paquete']; ?>
                                <input type="hidden" name="paquete" value="<?php echo $row['paquete']; ?>">
                            </td>
                            <td>
                                <?php echo $row['producto']; ?>
                                <input type="hidden" name="produto" value="<?php echo $row['produto']; ?>">
                            </td>
                            <td>
                                <?php echo $row['precio']; ?>
                                <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
 
                    <button type="submit" name="registrar" id="registrar">
                        Pagar
                    </button>
            </form>
</body>
</html>

