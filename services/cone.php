<?php
$serverName = "PERSONAL-PC"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"ZONA", "UID"=>"Ejemplo", "PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>