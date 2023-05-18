<?php
include('header.php');
include('conexion.php');
?>
<html>
    <head>
        <title>

        </title>

        <style>
            ul{
                list-style:none;
            }

            #imagenPerfil{
                height: 200px;
                width:200px;
            }

            #imagen{
                height:200px;
                width:200px;
            }

            #cambiarDatos{
                border:none;
                background-color:darkcyan;
                height:30px;
                color:white;
            }

            section{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
            }
        </style>
    </head>

    <body>
        
     <section>
        <div>
            <div id="imagenPerfil">
                <?php
                $nombre = $_SESSION['nombre'];
                $query = "SELECT * FROM registrarse WHERE nombre='$nombre'";
                $paquete = mysqli_query($conn,$query);

                while($resultados = mysqli_fetch_array($paquete)){
                    echo "<img src='".$resultados['imagen']."' id='imagen'>";
                }
                ?>
            </div>
            <br>
            <ul>
            <?php

            $nombre = $_SESSION['nombre'];

            $query = "SELECT * FROM registrarse WHERE nombre = '$nombre'";
            $paquete = mysqli_query($conn,$query);

            while($resultados=mysqli_fetch_array($paquete)){

            ?>
            <li>Nombre: <?php echo $resultados['nombre']; ?></li>
            <li>Apellido: <?php echo $resultados['apellido']; ?></li>
            <li>Correo Electronico: <?php echo $resultados['email']; ?></li>
            <?php
            }
            ?>

            <?php
            $nombre = $_SESSION['nombre'];

            $query = "SELECT * FROM datosadicionales WHERE nombre = '$nombre'";
            $paquete = mysqli_query($conn,$query);

            while($resultados=mysqli_fetch_array($paquete)){

            ?>
            <li>Numero: <?php echo $resultados['numero']; ?></li>
            <li>Pais: <?php echo $resultados['pais']; ?></li>
            <li>Ciudad: <?php echo $resultados['ciudad']; ?></li>
            <?php
            }
            ?>
            </ul>
            <button id="cambiarDatos">Actualizar Datos</button>
        </div>
     </section>

     <script>

        let cambiarDatos = document.getElementById("cambiarDatos");

        cambiarDatos.addEventListener("click", () =>{
            window.location.assign("datosextra.php");
        })
     </script>
    </body>
</html>