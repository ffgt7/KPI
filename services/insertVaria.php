<?php
    include('includes/funciones.php');
    session_start();

    $sql = "select id from departments where department=?";
    $json = select($sql, array($_SESSION["data"]["department"]));

    $sql2 = "insert into historyindicators(var1,var2,var3,idealResult,metaResult,fk_department values(?,?,?,?,?,?))";
    insert($sql2, array($_POST['varMedi']['0'],$_POST['varMedi']['1'],$_POST['varMedi']['2'],$_POST['idealResult'],$_POST['metaResult'],$json["id"]));
