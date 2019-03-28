<?php
    include_once 'server.php';
    include_once 'conexion.php';

    $serverName = name();
    $connectionInfo = ac();

    $con = sqlsrv_connect($serverName, $connectionInfo);

    $id_distrito = $_POST['id_distrito'];

    $sql = "SELECT ID_DISTRITO, NOMBRE FROM DISTRITO
    WHERE ID_CANTON = ".$id_distrito."";

    $params = array();
    $options = array('Scrollable' => SQLSRV_CURSOR_KEYSET);

    $stmt = sqlsrv_query($con, $sql, $params, $options);

    $html = "<option value='0'>Seleccione el distrito</option>";

    while($fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $html.= "<option value='".$fila['ID_DISTRITO']."'>".$fila['NOMBRE']."</option>";
    }

    echo $html;
?>