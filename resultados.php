<?php
include("header.php");
include("conexion.php");
?>
<html>

<head>
<title>
</title>
<link rel="stylesheet" href="css/cssResultados.css">
</head>

<body>
    <div class="contenido">
    <h1>Hola <?php echo $_SESSION["nombre"]; ?>!</h1>
    <p>Aqui podras ver los resultados de tus tests</p>
    <h3>MBTI</h3>
    <ol id="resultadosmbti">
    <?php
    $nombre = $_SESSION['nombre_unico'];

    $query = "SELECT * FROM resultadosmbti WHERE nombre = '$nombre'";
    $paquete = mysqli_query($conn,$query);
    

    if(!isset($_GET['eliminar'])){

    while($resultados=mysqli_fetch_array($paquete)){
    ?>
    <form action="resultados.php">
        <li><?php echo $resultados['resultado']; ?> <?php echo $resultados['fecha'];?><a href="resultados.php?eliminar=<?php echo $resultados['id']; ?>" class="eliminar" value="eliminar"><i class="fa-solid fa-trash"></i></a>
    <a href="../TFG/resultadosMbti/<?php echo $resultados['resultado'];?>.php" class="ver"><i class="fa-solid fa-eye"></i></a></li>
        <br>
    </form>
    <?php } ?>

    <?php }else{

        $id = $_GET['eliminar'];
        $nombre = $_SESSION['nombre'];
        $query = "DELETE FROM resultadosmbti WHERE id='$id'";
        $paquete = mysqli_query($conn,$query);
        echo "<script>window.location.href='resultados.php'</script>";
    } 
    ?>
    </ol>
    <h3>Eneagrama</h3>
    <ol id="resultadoseneagrama">
        
    <?php

    $query2 = "SELECT * FROM resultadoseneagrama WHERE nombre='$nombre'";
    $paquete2 = mysqli_query($conn,$query2);

    if(!isset($_GET['eliminarE'])){

        while($resultados=mysqli_fetch_array($paquete2)){
        ?>
        <li><?php echo $resultados['resultado']; ?> <?php echo $resultados['fecha']; ?> <a href="resultados.php?eliminarE=<?php echo $resultados['id']; ?>" class="eliminar"><i class="fa-solid fa-trash"></i></a>
        <a href="../TFG/resultadosEneagrama/<?php echo str_replace(" ","",$resultados['resultado']);?>.php" class="ver"><i class="fa-solid fa-eye"></i></a></li>
        <br>
        <?php } ?>

        <?php }else{

                $id = $_GET['eliminarE'];
                $nombre = $_SESSION['nombre'];
                $query = "DELETE FROM resultadoseneagrama WHERE id='$id'";
                $paquete = mysqli_query($conn,$query);
                echo "<script>window.location.href='resultados.php'</script>";
               } 
        ?>
    </ol>
            </div>
</body>



</html>