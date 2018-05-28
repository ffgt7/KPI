<?php
    include('includes/funciones.php');
    session_start();
    $var = 1;

    $sql = "select * from historyindicators where fk_department=?";
    $json = selectAll($sql,array($var));
    echo json_encode($json);