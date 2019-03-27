<?php
    function ac() {
        $strFileName = "conexion.ini";
        $objFopen = parse_ini_file($strFileName, true);

        $dbName = $objFopen['Conexion']['dbName'];
        $userName = $objFopen['Conexion']['userName'];
        $password = $objFopen['Conexion']['password'];
        
        return array('Database'=>"$dbName", 'UID'=>"$userName", 'PWD'=>"$password", 'CharacterSet'=>'UTF-8');
    }
?>