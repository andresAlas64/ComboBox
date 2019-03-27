<?php
    function name() {
        $strFileName = "conexion.ini";
        
        $objFopen = parse_ini_file($strFileName, true);

        $ns = $objFopen['Conexion']['serverName'];

        return $ns;
    }
?>