<?php

$inc = include("conexion.php");
if ($inc){
    $consulta = "SELECT Cantidad FROM Productos where ID_Producto= 9 ";
    $resultado = mysqli_query($conn,$consulta);
    if ($resultado) {
        while($row = $resultado -> fetch_array()){
            $cantidad = $row['Cantidad'];
            ?>
            <div>
                <p>
                    <b>cantidad:</b><?php echo $cantidad; ?><br>
                </p>
            </div>
            <?php
        }
    }
}


?>