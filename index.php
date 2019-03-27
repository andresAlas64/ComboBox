<?php
    include_once 'services/server.php';
    include_once 'services/conexion.php';

    $serverName = name();
    $connectionInfo = ac();

    $con = sqlsrv_connect($serverName, $connectionInfo);

    $params = array();

    $options = array('Scrollable' => SQLSRV_CURSOR_KEYSET);

    include_once 'include/docDeclaracion.php';
?>
<form action="" method="">
  <div class="form-group py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Provincia</label>
                    <?php
                        $sql = "SELECT ID_PROVINCIA, NOMBRE FROM PROVINCIA";

                        $stmt = sqlsrv_query($con, $sql, $params, $options);

                        echo "<select name='provincia' id='provincia' class='form-control'>";

                            echo "<option value='0'>Seleccione la provincia</option>";

                            while($fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                echo "<option value='$fila[ID_PROVINCIA]'>$fila[NOMBRE]</option>";
                            }

                        echo "</select>";
                    ?>
                </div>
            </div>
            <!-- -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Canton</label>
                    <?php
                        //$sql = "SELECT ID_CANTON, ID_PROVINCIA, NOMBRE FROM CANTON";

                        //$stmt = sqlsrv_query($con, $sql, $params, $options);

                        echo "<select id='canton' name='canton' class='form-control'>";

                            echo "<option value='0'>Seleccione el canton</option>";

                            while($fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                echo "<option value=''></option>";
                            }

                        echo "</select>";
                    ?>
                </div>
            </div>
            <!-- -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Distrito</label>
                    <?php
                        /*$sql = "SELECT ID_DISTRITO, ID_PROVINCIA, ID_CANTON, NOMBRE FROM DISTRITO";

                        $stmt = sqlsrv_query($con, $sql, $params, $options);*/

                        echo "<select id='distrito' name='distrito' class='form-control'>";

                            echo "<option value='0'>Seleccione el distrito</option>";

                            while($fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                echo "<option value=''></option>";
                            }

                        echo "</select>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    include_once 'include/docCierre.php';
?>