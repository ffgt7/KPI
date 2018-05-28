<?php
    include('includes/funciones.php');
    session_start();
    $sql3="select count(mensaje) as num from mensajes where visto=0 and origen=0 and cuenta=?";
    $json=select($sql3,array($_SESSION["data"]["cuenta"]));
    echo json_encode($json);