<?php
    include_once 'server.php';
    include_once 'conexion.php';

    $serverName = name();
    $connectionInfo = ac();

    $con = sqlsrv_connect($serverName, $connectionInfo);

    $id_canton = $_POST['id_canton'];

    $sql = "SELECT ID_CANTON, NOMBRE FROM CANTON
    WHERE ID_PROVINCIA = ".$id_canton."";

    $params = array();
    $options = array('Scrollable' => SQLSRV_CURSOR_KEYSET);

    $stmt = sqlsrv_query($con, $sql, $params, $options);

    $html = "<option value='0'>Seleccione la provincia</option>";

    while($fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $html = "<option value='".$fila['ID_CANTON']."'>".$fila['NOMBRE']."</option>";
        echo $html;
    }

    //echo $html;
?>