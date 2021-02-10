<?php
include("con_db.php");

if (isset($_POST['register'])){

    $fecha = date("Ymd");
    $ipaddress = getenv('HTTP_CLIENT_IP');

    $consulta = "INSERT INTO mkt_tecnologia(fecha_hoy, ip) VALUES ( '$fecha', '$ipaddress')";

    $resultado = mysqli_query($conex, $consulta);

    if($resultado){
        ?>
        <h3 class="ok">Los datos se han inscrito correctamente</h3>
        <h3 class="ok"><?php echo $opcionCorrSeg ?></h3>
        <?php
    } else {
        ?>
        <h3 class="bad">Ups ha ocurrido un error</h3>
        <?php
    }
} else {
    ?>
    <h3 class="bad">Por favor complete los campos!!!</h3>
    <?php
}

?>
