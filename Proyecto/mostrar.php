<?php

$inc = include("conexion.php");
if ($inc){
    $consulta = "SELECT cantidad FROM producto where IDproducto= 1 ";
    $resultado = mysqli_query($conn,$consulta);
    if ($resultado) {
        while($row = $resultado -> fetch_array()){
            $cantidad = $row['cantidad'];
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