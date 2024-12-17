<?php
set_time_limit(50000);

//WebServices de Autenticacion
error_reporting(E_ERROR | E_PARSE | E_NOTICE); //E_WARNING |

require_once 'JSON_WebService.php';

//Obtiene el contenido de la solicitud POST
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

//Instancia de la clase JSON_WebService
$server = new JSON_WebService($HTTP_RAW_POST_DATA);

//Registra los metodos del servicio web
$server->register("UploadPersonaNatural");
$server->register("UploadPersonaJuridica");
$server->register("UploadPersonaExterior");
$server->register("UploadPersonaNaturalInscrita");

//Inicializa el servicio
$server->start();

function UploadPersonaNatural()
{
        $InfoCarga = 0;
        $ReturnValue = array();
        if (isset($_POST['duin']) && isset($_POST['nitn'])) {

                $DuiFormato = $_POST['duin'];
                $NitFormato = $_POST['nitn'];

                if ($_FILES['InputFileNatural']) {

                        require ("../sqlconnection/cn.php");

                        $file_array = reArrayFiles($_FILES['InputFileNatural']);

                        foreach ($file_array as $file) {

                                $UploadDir = dirname(__FILE__, 2) . '\\UploadDocument\\PersonaNatural\\' . $DuiFormato . '\\';
                                if (!file_exists($UploadDir)) {
                                        mkdir($UploadDir, 0777, true);
                                }

                                //Getting the Temporary file name of the uploaded file
                                $FileTempName = $file['tmp_name'];

                                //Getting the file ext
                                $FileExt = explode('.', $file['name']);
                                $FileActualExt = strtolower(end($FileExt));

                                //File destination
                                $LengthUnique = 25; // Set the desired length
                                $FilenameUnique = bin2hex(openssl_random_pseudo_bytes($LengthUnique)) . "." . $FileActualExt;
                                $FileDestination = $UploadDir . $FilenameUnique;

                                //function to move temp location to permanent location
                                $FileMove = move_uploaded_file($FileTempName, $FileDestination);
                                if ($FileMove) {
                                        $InfoCarga = 1;

                                        $QueryInsert = "INSERT INTO ILCMASTER..PersonaNaturalLicoreraUploads 
                                                                 (duiFormato, nitFormato, PathArchivo, NombreArchivo, FechaCarga) 
                                                                VALUES('" . $DuiFormato . "', '" . $NitFormato . "', '" . $UploadDir . "', '" . $FilenameUnique . "', GETDATE())";

                                        $InsertStmt = sqlsrv_query($conexion, $QueryInsert);

                                        if ($InsertStmt === false) {
                                                if (($ErrorInsert = sqlsrv_errors()) != null) {
                                                        $error = 1;
                                                        foreach ($ErrorInsert as $error) {
                                                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                                echo "code: " . $error['code'] . "<br />";
                                                                echo "message: " . $error['message'] . "<br />";
                                                        }
                                                }
                                        }
                                }

                                $count = $count + 1;
                        }

                        if ($InfoCarga == 1) {

                                $QueryUpdate = "UPDATE ILCMASTER..PersonaNaturalLicorera
                                                        SET CargaDocuExiste = 1
                                                WHERE [duiFormato] = '" . $DuiFormato . "' AND [nitFormato] = '" . $NitFormato . "' ";

                                $UpdateStmt = sqlsrv_query($conexion, $QueryUpdate);

                                if ($UpdateStmt === false) {
                                        if (($ErrorUpdate = sqlsrv_errors()) != null) {
                                                $error = 1;
                                                foreach ($ErrorUpdate as $error) {
                                                        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                        echo "code: " . $error['code'] . "<br />";
                                                        echo "message: " . $error['message'] . "<br />";
                                                }
                                        }
                                }

                                $RowArray["CodeResponse"] = '1';
                                $RowArray["MessageResult"] = "Carga Exitosa!";
                                array_push($ReturnValue, $RowArray);
                        } else {
                                $RowArray["CodeResponse"] = '-1';
                                $RowArray["MessageResult"] = "Error al Cargar el Archivo!";
                                array_push($ReturnValue, $RowArray);
                        }

                } else {
                        $RowArray["CodeResponse"] = '-1';
                        $RowArray["MessageResult"] = "Es Requerido al Menos 1 Archivo!";
                        array_push($ReturnValue, $RowArray);
                }
        } else {
                $RowArray["CodeResponse"] = '-1';
                $RowArray["MessageResult"] = "Es Requerido el Número de Documento!";
                array_push($ReturnValue, $RowArray);
        }
        return $ReturnValue;
}

function UploadPersonaNaturalInscrita()
{
        $InfoCarga = 0;
        $ReturnValue = array();
        if (isset($_POST['ncrni'])) {

                $NRCFormato = $_POST['ncrni'];

                if ($_FILES['InputFileNaturalInscrita']) {

                        require ("../sqlconnection/cn.php");
                        $file_array = reArrayFiles($_FILES['InputFileNaturalInscrita']);

                        foreach ($file_array as $file) {

                                $UploadDir = dirname(__FILE__, 2) . '\\UploadDocument\\PersonaNaturalInscrita\\' . $NRCFormato . '\\';
                                if (!file_exists($UploadDir)) {
                                        mkdir($UploadDir, 0777, true);
                                }

                                //Getting the Temporary file name of the uploaded file
                                $FileTempName = $file['tmp_name'];

                                //Getting the file ext
                                $FileExt = explode('.', $file['name']);
                                $FileActualExt = strtolower(end($FileExt));

                                //File destination
                                $LengthUnique = 25; // Set the desired length
                                $FilenameUnique = bin2hex(openssl_random_pseudo_bytes($LengthUnique)) . "." . $FileActualExt;
                                $FileDestination = $UploadDir . $FilenameUnique;

                                //function to move temp location to permanent location
                                $FileMove = move_uploaded_file($FileTempName, $FileDestination);
                                if ($FileMove) {
                                        $InfoCarga = 1;

                                        $QueryInsert = "INSERT INTO ILCMASTER..PersonaNaturalInscritaLicoreraUploads 
                                                                 (NRCFormato, PathArchivo, NombreArchivo, FechaCarga) 
                                                                VALUES('" . $NRCFormato . "', '" . $UploadDir . "', '" . $FilenameUnique . "', GETDATE())";

                                        $InsertStmt = sqlsrv_query($conexion, $QueryInsert);

                                        if ($InsertStmt === false) {
                                                if (($ErrorInsert = sqlsrv_errors()) != null) {
                                                        $error = 1;
                                                        foreach ($ErrorInsert as $error) {
                                                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                                echo "code: " . $error['code'] . "<br />";
                                                                echo "message: " . $error['message'] . "<br />";
                                                        }
                                                }
                                        }
                                }

                                $count = $count + 1;
                        }

                        if ($InfoCarga == 1) {

                                $QueryUpdate = "UPDATE ILCMASTER..PersonaNaturalInscritaLicorera
                                                        SET CargaDocuExiste = 1
                                                WHERE [NRCFormato] = '" . $NRCFormato . "'";

                                $UpdateStmt = sqlsrv_query($conexion, $QueryUpdate);

                                if ($UpdateStmt === false) {
                                        if (($ErrorUpdate = sqlsrv_errors()) != null) {
                                                $error = 1;
                                                foreach ($ErrorUpdate as $error) {
                                                        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                        echo "code: " . $error['code'] . "<br />";
                                                        echo "message: " . $error['message'] . "<br />";
                                                }
                                        }
                                }

                                $RowArray["CodeResponse"] = '1';
                                $RowArray["MessageResult"] = "Carga Exitosa!";
                                array_push($ReturnValue, $RowArray);
                        } else {
                                $RowArray["CodeResponse"] = '-1';
                                $RowArray["MessageResult"] = "Error al Cargar el Archivo!";
                                array_push($ReturnValue, $RowArray);
                        }

                } else {
                        $RowArray["CodeResponse"] = '-1';
                        $RowArray["MessageResult"] = "Es Requerido al Menos 1 Archivo!";
                        array_push($ReturnValue, $RowArray);
                }
        } else {
                $RowArray["CodeResponse"] = '-1';
                $RowArray["MessageResult"] = "Es Requerido el Número de Documento!";
                array_push($ReturnValue, $RowArray);
        }
        return $ReturnValue;
}

function UploadPersonaJuridica()
{
        $InfoCarga = 0;
        $ReturnValue = array();
        if (isset($_POST['nrcj']) && isset($_POST['nitj'])) {

                $NRCFormato = $_POST['nrcj'];
                $NitFormato = $_POST['nitj'];

                if ($_FILES['InputFileJuridica']) {

                        require ("../sqlconnection/cn.php");
                        $file_array = reArrayFiles($_FILES['InputFileJuridica']);

                        foreach ($file_array as $file) {

                                $UploadDir = dirname(__FILE__, 2) . '\\UploadDocument\\PersonaJuridica\\' . $NRCFormato . '\\';
                                if (!file_exists($UploadDir)) {
                                        mkdir($UploadDir, 0777, true);
                                }

                                //Getting the Temporary file name of the uploaded file
                                $FileTempName = $file['tmp_name'];

                                //Getting the file ext
                                $FileExt = explode('.', $file['name']);
                                $FileActualExt = strtolower(end($FileExt));

                                //File destination
                                $LengthUnique = 25; // Set the desired length
                                $FilenameUnique = bin2hex(openssl_random_pseudo_bytes($LengthUnique)) . "." . $FileActualExt;
                                $FileDestination = $UploadDir . $FilenameUnique;

                                //function to move temp location to permanent location
                                $FileMove = move_uploaded_file($FileTempName, $FileDestination);
                                if ($FileMove) {
                                        $InfoCarga = 1;

                                        $QueryInsert = "INSERT INTO ILCMASTER..PersonaJuridicaLicoreraUploads 
                                                                 (NRCFormato, nitFormato, PathArchivo, NombreArchivo, FechaCarga) 
                                                                VALUES('" . $NRCFormato . "', '" . $NitFormato . "', '" . $UploadDir . "', '" . $FilenameUnique . "', GETDATE())";

                                        $InsertStmt = sqlsrv_query($conexion, $QueryInsert);

                                        if ($InsertStmt === false) {
                                                if (($ErrorInsert = sqlsrv_errors()) != null) {
                                                        $error = 1;
                                                        foreach ($ErrorInsert as $error) {
                                                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                                echo "code: " . $error['code'] . "<br />";
                                                                echo "message: " . $error['message'] . "<br />";
                                                        }
                                                }
                                        }
                                }

                                $count = $count + 1;
                        }

                        if ($InfoCarga == 1) {

                                $QueryUpdate = "UPDATE ILCMASTER..PersonaJuridicaLicorera
                                                        SET CargaDocuExiste = 1
                                                        WHERE [NRCFormato] = '" . $NRCFormato . "' AND [nitFormato] = '" . $NitFormato . "'";

                                $UpdateStmt = sqlsrv_query($conexion, $QueryUpdate);

                                if ($UpdateStmt === false) {
                                        if (($ErrorUpdate = sqlsrv_errors()) != null) {
                                                $error = 1;
                                                foreach ($ErrorUpdate as $error) {
                                                        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                        echo "code: " . $error['code'] . "<br />";
                                                        echo "message: " . $error['message'] . "<br />";
                                                }
                                        }
                                }

                                $RowArray["CodeResponse"] = '1';
                                $RowArray["MessageResult"] = "Carga Exitosa!";
                                array_push($ReturnValue, $RowArray);
                        } else {
                                $RowArray["CodeResponse"] = '-1';
                                $RowArray["MessageResult"] = "Error al Cargar el Archivo!";
                                array_push($ReturnValue, $RowArray);
                        }

                } else {
                        $RowArray["CodeResponse"] = '-1';
                        $RowArray["MessageResult"] = "Es Requerido al Menos 1 Archivo!";
                        array_push($ReturnValue, $RowArray);
                }
        } else {
                $RowArray["CodeResponse"] = '-1';
                $RowArray["MessageResult"] = "Es Requerido el Número de Documento!";
                array_push($ReturnValue, $RowArray);
        }
        return $ReturnValue;
}

function UploadPersonaExterior()
{
        $InfoCarga = 0;
        $ReturnValue = array();
        if (isset($_POST['registrofiscal'])) {

                $RegistroFiscal = $_POST['registrofiscal'];

                if ($_FILES['InputFileExterior']) {

                        require ("../sqlconnection/cn.php");
                        $file_array = reArrayFiles($_FILES['InputFileExterior']);

                        foreach ($file_array as $file) {

                                $UploadDir = dirname(__FILE__, 2) . '\\UploadDocument\\PersonaExterior\\' . $RegistroFiscal . '\\';
                                if (!file_exists($UploadDir)) {
                                        mkdir($UploadDir, 0777, true);
                                }

                                //Getting the Temporary file name of the uploaded file
                                $FileTempName = $file['tmp_name'];

                                //Getting the file ext
                                $FileExt = explode('.', $file['name']);
                                $FileActualExt = strtolower(end($FileExt));

                                //File destination
                                $LengthUnique = 25; // Set the desired length
                                $FilenameUnique = bin2hex(openssl_random_pseudo_bytes($LengthUnique)) . "." . $FileActualExt;
                                $FileDestination = $UploadDir . $FilenameUnique;

                                //function to move temp location to permanent location
                                $FileMove = move_uploaded_file($FileTempName, $FileDestination);
                                if ($FileMove) {
                                        $InfoCarga = 1;

                                        $QueryInsert = "INSERT INTO ILCMASTER..PersonaExteriorLicoreraUploads 
                                                                 (numeroRegistroFiscal, PathArchivo, NombreArchivo, FechaCarga) 
                                                                VALUES('" . $RegistroFiscal . "', '" . $UploadDir . "', '" . $FilenameUnique . "', GETDATE())";

                                        $InsertStmt = sqlsrv_query($conexion, $QueryInsert);

                                        if ($InsertStmt === false) {
                                                if (($ErrorInsert = sqlsrv_errors()) != null) {
                                                        $error = 1;
                                                        foreach ($ErrorInsert as $error) {
                                                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                                echo "code: " . $error['code'] . "<br />";
                                                                echo "message: " . $error['message'] . "<br />";
                                                        }
                                                }
                                        }
                                }

                                $count = $count + 1;
                        }

                        if ($InfoCarga == 1) {

                                $QueryUpdate = "UPDATE ILCMASTER..PersonaExteriorLicorera
                                                        SET CargaDocuExiste = 1
                                                        WHERE [numeroRegistroFiscal] = '" . $RegistroFiscal . "'";

                                $UpdateStmt = sqlsrv_query($conexion, $QueryUpdate);

                                if ($UpdateStmt === false) {
                                        if (($ErrorUpdate = sqlsrv_errors()) != null) {
                                                $error = 1;
                                                foreach ($ErrorUpdate as $error) {
                                                        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                                        echo "code: " . $error['code'] . "<br />";
                                                        echo "message: " . $error['message'] . "<br />";
                                                }
                                        }
                                }

                                $RowArray["CodeResponse"] = '1';
                                $RowArray["MessageResult"] = "Carga Exitosa!";
                                array_push($ReturnValue, $RowArray);
                        } else {
                                $RowArray["CodeResponse"] = '-1';
                                $RowArray["MessageResult"] = "Error al Cargar el Archivo!";
                                array_push($ReturnValue, $RowArray);
                        }

                } else {
                        $RowArray["CodeResponse"] = '-1';
                        $RowArray["MessageResult"] = "Es Requerido al Menos 1 Archivo!";
                        array_push($ReturnValue, $RowArray);
                }
        } else {
                $RowArray["CodeResponse"] = '-1';
                $RowArray["MessageResult"] = "Es Requerido el Número de Documento!";
                array_push($ReturnValue, $RowArray);
        }
        return $ReturnValue;
}

function reArrayFiles(&$file_post)
{
        $isMulti = is_array($file_post['name']);
        $file_count = $isMulti ? count($file_post['name']) : 1;
        $file_keys = array_keys($file_post);

        $file_array = [];

        for ($i = 0; $i < $file_count; $i++)
                foreach ($file_keys as $key) {
                        if ($isMulti) {
                                $file_array[$i][$key] = $file_post[$key][$i];
                        } else {
                                $file_array[$i][$key] = $file_post[$key];
                        }
                }

        return $file_array;
}

