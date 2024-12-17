<?php
session_start();
// modificado 27/01/2021        Saúl Díaz   7594-8423       sdiaz@ilcabana.net

$function = $_POST['funcion'];
$resultado = "";
switch ($function) {
        case 'Departamentos':
                echo json_encode(get_departamento());
                break;
        case 'Municipio':
                $departamento = $_POST['departamento'];
                echo json_encode(get_municipio($departamento));
                break;
        case 'Giro':
                echo json_encode(get_giro());
                break;
        case 'Pais':
                echo json_encode(get_pais());
                break;
        case 'Recinto':
                echo json_encode(get_recinto());
                break;
        case 'Regimen':
                echo json_encode(get_regimen());
                break;
        case 'Transporte':
                echo json_encode(get_transporte());
                break;
        case 'Incoterms':
                echo json_encode(get_incoterms());
                break;
        case 'GuardarPersonaNatural':
                $nombre = $_POST['nombreCompleto'];
                $duiFormato = $_POST['duiFormato'];
                $dui = $_POST['dui'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $direccionNotificacion = $_POST['direccion'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];

                echo json_encode(
                        insertar_persona_natural(
                                $nombre,
                                $duiFormato,
                                $dui,
                                $nitFormato,
                                $nit,
                                $direccionNotificacion,
                                $departamento,
                                $municipio,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'GuardarPersonaNaturalInscrita':
                $nombre = $_POST['nombreCompleto'];
                $nombreComercial = $_POST['nombreComercial'];
                $duiFormato = $_POST['duiFormato'];
                $dui = $_POST['dui'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $ncrFormato = $_POST['nrcFormato'];
                $ncr = $_POST['nrc'];
                $actividad1 = $_POST['actividad1'];
                $actividad2 = $_POST['actividad2'];
                $actividad3 = $_POST['actividad3'];
                $direccionNRC = $_POST['direccionNRC'];
                $categoria = $_POST['categoria'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $duipersonaRecibeFacturaFormato = $_POST['duipersonaRecibeFacturaFormato'];
                $duipersonaRecibeFactura = $_POST['duipersonaRecibeFactura'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];
                echo json_encode(
                        insertar_persona_natural_inscrita(
                                $nombre,
                                $nombreComercial,
                                $duiFormato,
                                $dui,
                                $nitFormato,
                                $nit,
                                $ncrFormato,
                                $ncr,
                                $actividad1,
                                $actividad2,
                                $actividad3,
                                $direccionNRC,
                                $categoria,
                                $departamento,
                                $municipio,
                                $duipersonaRecibeFacturaFormato,
                                $duipersonaRecibeFactura,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'GuardarPersonaJuridica':
                $nombre = $_POST['nombreRazon'];
                $nombreComercial = $_POST['nombreComercial'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $ncrFormato = $_POST['nrcFormato'];
                $ncr = $_POST['nrc'];
                $actividad1 = $_POST['actividad1'];
                $actividad2 = $_POST['actividad2'];
                $actividad3 = $_POST['actividad3'];
                $categoria = $_POST['categoria'];
                $direccionNRC = $_POST['direccionNRC'];
                $representante = $_POST['representanteLegal'];
                $duiRepresentanteFormato = $_POST['duiRepresentanteFormato'];
                $duiRepresentante = $_POST['duiRepresentante'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $duipersonaRecibeFacturaFormato = $_POST['duipersonaRecibeFacturaFormato'];
                $duipersonaRecibeFactura = $_POST['duipersonaRecibeFactura'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];

                echo json_encode(
                        insertar_persona_juridica(
                                $nombre,
                                $nombreComercial,
                                $nitFormato,
                                $nit,
                                $ncrFormato,
                                $ncr,
                                $actividad1,
                                $actividad2,
                                $actividad3,
                                $categoria,
                                $direccionNRC,
                                $representante,
                                $duiRepresentanteFormato,
                                $duiRepresentante,
                                $departamento,
                                $municipio,
                                $duipersonaRecibeFacturaFormato,
                                $duipersonaRecibeFactura,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'GuardarPersonaExterior':
                $nombreCompleto = $_POST['nombreCompleto'];
                $nombreComercial = $_POST['nombreComercial'];
                $registroFiscal = $_POST['registroFiscal'];
                $actividad = $_POST['actividad'];
                $pais = $_POST['pais'];
                $direccionNotificacion = $_POST['direccionNotificacion'];
                $recinto = $_POST['recinto'];
                $regimen = $_POST['regimen'];
                $transporte = $_POST['transporte'];
                $incoterms = $_POST['incoterms'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];

                echo json_encode(
                        insertar_persona_exterior(
                                $nombreCompleto,
                                $nombreComercial,
                                $registroFiscal
                                ,
                                $actividad,
                                $pais,
                                $direccionNotificacion,
                                $recinto,
                                $regimen,
                                $transporte,
                                $incoterms,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'VerificarPersonaNatural':
                $dui = $_POST['dui'];
                $nit = $_POST['nit'];
                echo json_encode(VerificarPersonaNatural($dui, $nit));
                break;
        case 'UpdatePersonaNatural':
                $nombre = $_POST['nombreCompleto'];
                $duiFormato = $_POST['duiFormato'];
                $dui = $_POST['dui'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $direccionNotificacion = $_POST['direccion'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];
                echo json_encode(
                        update_persona_natural(
                                $nombre,
                                $duiFormato,
                                $dui,
                                $nitFormato,
                                $nit,
                                $direccionNotificacion,
                                $departamento,
                                $municipio,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'VerificarPersonaNaturalInscrita':
                $dui = $_POST['dui'];
                $nit = $_POST['nit'];
                $nrc = $_POST['nrc'];
                echo json_encode(VerificarPersonaNaturalInscrita($dui, $nit, $nrc));
                break;
        case 'UpdatePersonaNaturalInscrita':
                $nombre = $_POST['nombreCompleto'];
                $nombreComercial = $_POST['nombreComercial'];
                $duiFormato = $_POST['duiFormato'];
                $dui = $_POST['dui'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $ncrFormato = $_POST['nrcFormato'];
                $ncr = $_POST['nrc'];
                $actividad1 = $_POST['actividad1'];
                $actividad2 = $_POST['actividad2'];
                $actividad3 = $_POST['actividad3'];
                $direccionNRC = $_POST['direccionNRC'];
                $categoria = $_POST['categoria'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $duipersonaRecibeFacturaFormato = $_POST['duipersonaRecibeFacturaFormato'];
                $duipersonaRecibeFactura = $_POST['duipersonaRecibeFactura'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];
                echo json_encode(
                        update_persona_natural_inscrita(
                                $nombre,
                                $nombreComercial,
                                $duiFormato,
                                $dui,
                                $nitFormato,
                                $nit,
                                $ncrFormato,
                                $ncr,
                                $actividad1,
                                $actividad2,
                                $actividad3,
                                $direccionNRC,
                                $categoria,
                                $departamento,
                                $municipio,
                                $duipersonaRecibeFacturaFormato,
                                $duipersonaRecibeFactura,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'VerificarPersonaJuridica':
                $nit = $_POST['nit'];
                $nrc = $_POST['nrc'];
                echo json_encode(VerificarPersonaJuridica($nit, $nrc));
                break;
        case 'UpdatePersonaJuridica':
                $nombre = $_POST['nombreRazon'];
                $nombreComercial = $_POST['nombreComercial'];
                $nitFormato = $_POST['nitFormato'];
                $nit = $_POST['nit'];
                $ncrFormato = $_POST['nrcFormato'];
                $ncr = $_POST['nrc'];
                $actividad1 = $_POST['actividad1'];
                $actividad2 = $_POST['actividad2'];
                $actividad3 = $_POST['actividad3'];
                $categoria = $_POST['categoria'];
                $direccionNRC = $_POST['direccionNRC'];
                $representante = $_POST['representanteLegal'];
                $duiRepresentanteFormato = $_POST['duiRepresentanteFormato'];
                $duiRepresentante = $_POST['duiRepresentante'];
                $departamento = $_POST['departamento'];
                $municipio = $_POST['municipio'];
                $duipersonaRecibeFacturaFormato = $_POST['duipersonaRecibeFacturaFormato'];
                $duipersonaRecibeFactura = $_POST['duipersonaRecibeFactura'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];

                echo json_encode(
                        update_persona_juridica(
                                $nombre,
                                $nombreComercial,
                                $nitFormato,
                                $nit,
                                $ncrFormato,
                                $ncr,
                                $actividad1,
                                $actividad2,
                                $actividad3,
                                $categoria,
                                $direccionNRC,
                                $representante,
                                $duiRepresentanteFormato,
                                $duiRepresentante,
                                $departamento,
                                $municipio,
                                $duipersonaRecibeFacturaFormato,
                                $duipersonaRecibeFactura,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        case 'VerificarPersonaExterior':
                $noRegistro = $_POST['noRegistro'];
                echo json_encode(VerificarPersonaExterior($noRegistro));
                break;
        case 'ActualizarPersonaExterior':
                $nombreCompleto = $_POST['nombreCompleto'];
                $nombreComercial = $_POST['nombreComercial'];
                $registroFiscal = $_POST['registroFiscal'];
                $actividad = $_POST['actividad'];
                $pais = $_POST['pais'];
                $direccionNotificacion = $_POST['direccionNotificacion'];
                $recinto = $_POST['recinto'];
                $regimen = $_POST['regimen'];
                $transporte = $_POST['transporte'];
                $incoterms = $_POST['incoterms'];
                $nombresRecibeFactura = $_POST['nombresRecibe'];
                $apellidosRecibeFactura = $_POST['apellidosRecibe'];
                $correo1 = $_POST['correo1'];
                $correo2 = $_POST['correo2'];
                $telefono1Formato = $_POST['tel1Formato'];
                $telefono1 = $_POST['tel1'];
                $telefono2Formato = $_POST['tel2Formato'];
                $telefono2 = $_POST['tel2'];

                echo json_encode(
                        update_persona_exterior(
                                $nombreCompleto,
                                $nombreComercial,
                                $registroFiscal,
                                $actividad,
                                $pais,
                                $direccionNotificacion,
                                $recinto,
                                $regimen,
                                $transporte,
                                $incoterms,
                                $nombresRecibeFactura,
                                $apellidosRecibeFactura,
                                $correo1,
                                $correo2,
                                $telefono1Formato,
                                $telefono1,
                                $telefono2Formato,
                                $telefono2
                        )
                );
                break;
        default:
                break;
}
function VerificarPersonaExterior($noRegistro)
{
        require("../sqlconnection/cn.php");
        $query = sqlsrv_query($conexion, "SELECT * FROM ILCMASTER..PersonaExteriorLicorera as E
    WHERE E.numeroRegistroFiscal = '" . $noRegistro . "' 
    ORDER BY E.fechaRegistro DESC ");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombreCompleto'];
                $result[$i][1] = $row['nombreComercial'];
                $result[$i][2] = $row['numeroRegistroFiscal'];
                $result[$i][3] = $row['actividadEconomica'];
                $result[$i][4] = $row['pais'];
                $result[$i][5] = $row['direccionNotificaciones'];
                $result[$i][6] = $row['recintoFiscal'];
                $result[$i][7] = $row['regimen'];
                $result[$i][8] = $row['transporte'];
                $result[$i][9] = $row['incoterms'];
                $result[$i][10] = $row['nombresRecibeFactura'];
                $result[$i][11] = $row['apellidosRecibeFactura'];
                $result[$i][12] = $row['correo1'];
                $result[$i][13] = $row['correo2'];
                $result[$i][14] = $row['telefono1'];
                $result[$i][15] = $row['telefono2'];
                $i++;
        }
        return $result;
}

function VerificarPersonaJuridica($nit, $nrc)
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "  SELECT * FROM ILCMASTER..PersonaJuridicaLicorera as J
    WHERE J.nitFormato = '" . $nit . "' AND J.NRCFormato='" . $nrc . "' 
    ORDER BY J.fechaRegistro DESC ");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombreRazon'];
                $result[$i][1] = $row['nombreComercial'];
                $result[$i][2] = $row['nitFormato'];
                $result[$i][3] = $row['NRCFormato'];
                $result[$i][4] = $row['actividadEconomica1'];
                $result[$i][5] = $row['actividadEconomica2'];
                $result[$i][6] = $row['actividadEconomica3'];
                $result[$i][7] = $row['categoria'];
                $result[$i][8] = $row['direccionNRC'];
                $result[$i][9] = $row['representanteLegal'];
                $result[$i][10] = $row['duiRepresentanteFormato'];
                $result[$i][11] = $row['departamento'];
                $result[$i][12] = $row['municipio'];
                $result[$i][13] = $row['nombresRecibeFactura'];
                $result[$i][14] = $row['apellidosRecibeFactura'];
                $result[$i][15] = $row['correo1'];
                $result[$i][16] = $row['correo2'];
                $result[$i][17] = $row['telefono1Formato'];
                $result[$i][18] = $row['telefono2Formato'];
                $i++;
        }
        return $result;
}

function update_persona_natural_inscrita(
        $nombre,
        $nombreComercial,
        $duiFormato,
        $dui,
        $nitFormato,
        $nit,
        $ncrFormato,
        $ncr,
        $actividad1,
        $actividad2,
        $actividad3,
        $direccionNRC,
        $categoria,
        $departamento,
        $municipio,
        $duipersonaRecibeFacturaFormato,
        $duipersonaRecibeFactura,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");
        $query = "UPDATE ILCMASTER..PersonaNaturalInscritaLicorera
        SET nombre = '" . $nombre . "',
                nombreComercial = '" . $nombreComercial . "',
                duiFormato = '" . $duiFormato . "',
                dui = '" . $dui . "',
                nitFormato = '" . $nitFormato . "',
                nit = '" . $nit . "',
                NRCFormato = '" . $ncrFormato . "',
                NRC = '" . $ncr . "',
                actividadEconomica1 = '" . $actividad1 . "',
                actividadEconomica2='" . $actividad2 . "',
                actividadEconomica3='" . $actividad3 . "',
                direccionNRC='" . $direccionNRC . "',
                categoria='" . $categoria . "',
                departamento='" . $departamento . "',
                municipio='" . $municipio . "',
                duipersonaRecibeFacturaFormato='" . $duipersonaRecibeFacturaFormato . "',
                duipersonaRecibeFactura='" . $duipersonaRecibeFactura . "',
                nombresRecibeFactura='" . $nombresRecibeFactura . "',
                apellidosRecibeFactura='" . $apellidosRecibeFactura . "',
                correo1='" . $correo1 . "',
                correo2='" . $correo2 . "',
                telefono1Formato='" . $telefono1Formato . "',
                telefono1='" . $telefono1 . "',
                telefono2Formato='" . $telefono2Formato . "',
                telefono2='" . $telefono2 . "'
        WHERE [duiFormato] = '" . $duiFormato . "'
                AND [nitFormato] = '" . $nitFormato . "'
                AND [NRCFormato] = '" . $ncrFormato . "'";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
}

function VerificarPersonaNaturalInscrita($dui, $nit, $nrc)
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT * FROM ILCMASTER..PersonaNaturalInscritaLicorera as I
    WHERE I.duiFormato = '" . $dui . "' AND I.nitFormato = '" . $nit . "' AND I.NRCFormato='" . $nrc . "' 
    ORDER BY I.fechaRegistro DESC");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $result[$i][1] = $row['nombreComercial'];
                $result[$i][2] = $row['duiFormato'];
                $result[$i][3] = $row['nitFormato'];
                $result[$i][4] = $row['NRCFormato'];
                $result[$i][5] = $row['actividadEconomica1'];
                $result[$i][6] = $row['actividadEconomica2'];
                $result[$i][7] = $row['actividadEconomica3'];
                $result[$i][8] = $row['direccionNRC'];
                $result[$i][9] = $row['categoria'];
                $result[$i][10] = $row['departamento'];
                $result[$i][11] = $row['municipio'];
                $result[$i][12] = $row['nombresRecibeFactura'];
                $result[$i][13] = $row['apellidosRecibeFactura'];
                $result[$i][14] = $row['correo1'];
                $result[$i][15] = $row['correo2'];
                $result[$i][16] = $row['telefono1Formato'];
                $result[$i][17] = $row['telefono2Formato'];
                $result[$i][18] = $row['duipersonaRecibeFacturaFormato'];
                $i++;
        }
        return $result;
}

function update_persona_natural(
        $nombre,
        $duiFormato,
        $dui,
        $nitFormato,
        $nit
        ,
        $direccionNotificacion,
        $departamento,
        $municipio,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2
        ,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");
        $query = "UPDATE ILCMASTER..PersonaNaturalLicorera
        SET nombre = '" . $nombre . "',duiFormato = '" . $duiFormato . "',dui = '" . $dui . "',nitFormato = '" . $nitFormato . "',nit = '" . $nit . "'
        ,direccionNotificacion = '" . $direccionNotificacion . "',departamento='" . $departamento . "',municipio='" . $municipio . "'
        ,nombresRecibeFactura='" . $nombresRecibeFactura . "',apellidosRecibeFactura='" . $apellidosRecibeFactura . "'
        ,correo1='" . $correo1 . "',correo2='" . $correo2 . "',telefono1Formato='" . $telefono1Formato . "',telefono1='" . $telefono1 . "'
        ,telefono2Formato='" . $telefono2Formato . "',telefono2='" . $telefono2 . "'
        WHERE [duiFormato] = '" . $duiFormato . "' AND [nitFormato] = '" . $nitFormato . "' ";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
}

function VerificarPersonaNatural($dui, $nit)
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT * FROM ILCMASTER..PersonaNaturalLicorera as PN
    WHERE PN.duiFormato = '" . $dui . "' AND PN.nitFormato = '" . $nit . "'
    ORDER BY PN.fechaRegistro DESC ");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $result[$i][1] = $row['duiFormato'];
                $result[$i][2] = $row['dui'];
                $result[$i][3] = $row['nitFormato'];
                $result[$i][4] = $row['nit'];
                $result[$i][5] = $row['direccionNotificacion'];
                $result[$i][6] = $row['departamento'];
                $result[$i][7] = $row['municipio'];
                $result[$i][8] = $row['nombresRecibeFactura'];
                $result[$i][9] = $row['apellidosRecibeFactura'];
                $result[$i][10] = $row['correo1'];
                $result[$i][11] = $row['correo2'];
                $result[$i][12] = $row['telefono1Formato'];
                $result[$i][13] = $row['telefono1'];
                $result[$i][14] = $row['telefono2Formato'];
                $result[$i][15] = $row['telefono2'];
                $i++;
        }
        return $result;

}

function insertar_persona_exterior(
        $nombreCompleto,
        $nombreComercial,
        $registroFiscal,
        $actividad,
        $pais,
        $direccionNotificacion,
        $recinto,
        $regimen,
        $transporte,
        $incoterms,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");

        $query = "INSERT INTO ILCMASTER..PersonaExteriorLicorera(nombreCompleto,nombreComercial,
    numeroRegistroFiscal,actividadEconomica,pais,direccionNotificaciones,recintoFiscal,regimen,transporte,incoterms
    ,nombresRecibeFactura,apellidosRecibeFactura
    ,correo1,correo2,telefono1Formato, telefono1,telefono2Formato,telefono2,fechaRegistro) VALUES('" . $nombreCompleto . "','" . $nombreComercial . "','" . $registroFiscal . "','" . $actividad . "'
    ,'" . $pais . "','" . $direccionNotificacion . "'
    ,'" . $recinto . "','" . $regimen . "','" . $transporte . "','" . $incoterms . "','" . $nombresRecibeFactura . "','" . $apellidosRecibeFactura . "'
    ,'" . $correo1 . "','" . $correo2 . "','" . $telefono1Formato . "','" . $telefono1 . "','" . $telefono2Formato . "','" . $telefono2 . "',GETDATE())";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
        //var_dump($query);
}

function update_persona_exterior(
        $nombreCompleto,
        $nombreComercial,
        $registroFiscal,
        $actividad,
        $pais,
        $direccionNotificacion,
        $recinto,
        $regimen,
        $transporte,
        $incoterms,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");
        $query = "UPDATE ILCMASTER..PersonaExteriorLicorera
        SET nombreCompleto = '" . $nombreCompleto . "',
                nombreComercial = '" . $nombreComercial . "',
                numeroRegistroFiscal = '" . $registroFiscal . "',
                actividadEconomica = '" . $actividad . "',
                pais = '" . $pais . "',
                direccionNotificaciones = '" . $direccionNotificacion . "',
                recintoFiscal='" . $recinto . "',
                regimen='" . $regimen . "',
                transporte='" . $transporte . "',
                incoterms='" . $incoterms . "',
                nombresRecibeFactura='" . $nombresRecibeFactura . "',
                apellidosRecibeFactura='" . $apellidosRecibeFactura . "',
                correo1='" . $correo1 . "',
                correo2='" . $correo2 . "',
                telefono1Formato='" . $telefono1Formato . "',
                telefono1='" . $telefono1 . "',
                telefono2Formato='" . $telefono2Formato . "',
                telefono2='" . $telefono2 . "'
        WHERE numeroRegistroFiscal = '" . $registroFiscal . "'";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
}

function insertar_persona_juridica(
        $nombre,
        $nombreComercial,
        $nitFormato,
        $nit,
        $ncrFormato,
        $ncr,
        $actividad1,
        $actividad2,
        $actividad3,
        $categoria,
        $direccionNRC,
        $representante,
        $duiRepresentanteFormato,
        $duiRepresentante,
        $departamento,
        $municipio,
        $duipersonaRecibeFacturaFormato,
        $duipersonaRecibeFactura,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");

        $query = " INSERT INTO ILCMASTER..PersonaJuridicaLicorera(nombreRazon,nombreComercial,nitFormato,nit
    ,NRCFormato,NRC,actividadEconomica1,actividadEconomica2,actividadEconomica3,categoria,direccionNRC,representanteLegal
    ,duiRepresentanteFormato,duiRepresentante,departamento,municipio,duipersonaRecibeFacturaFormato,duipersonaRecibeFactura,
    nombresRecibeFactura,apellidosRecibeFactura,correo1,correo2,telefono1Formato,telefono1,telefono2Formato,telefono2,fechaRegistro) 
    VALUES('" . $nombre . "','" . $nombreComercial . "','" . $nitFormato . "','" . $nit . "','" . $ncrFormato . "','" . $ncr . "'
    ,'" . $actividad1 . "','" . $actividad2 . "','" . $actividad3 . "','" . $categoria . "','" . $direccionNRC . "','" . $representante . "'
    ,'" . $duiRepresentanteFormato . "','" . $duiRepresentante . "','" . $departamento . "','" . $municipio . "'
    ,'" . $duipersonaRecibeFacturaFormato . "','" . $duipersonaRecibeFactura . "','" . $nombresRecibeFactura . "','" . $apellidosRecibeFactura . "'
    ,'" . $correo1 . "','" . $correo2 . "','" . $telefono1Formato . "','" . $telefono1 . "'
    ,'" . $telefono2Formato . "','" . $telefono2 . "',GETDATE())";
        $stmt = sqlsrv_query($conexion, $query);


        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
        //var_dump($query);
}
function update_persona_juridica(
        $nombre,
        $nombreComercial,
        $nitFormato,
        $nit,
        $ncrFormato,
        $ncr,
        $actividad1,
        $actividad2,
        $actividad3,
        $categoria,
        $direccionNRC,
        $representante,
        $duiRepresentanteFormato,
        $duiRepresentante,
        $departamento,
        $municipio,
        $duipersonaRecibeFacturaFormato,
        $duipersonaRecibeFactura,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");

        $query = "UPDATE ILCMASTER..PersonaJuridicaLicorera
                SET nombreRazon = '" . $nombre . "',
                        nombreComercial = '" . $nombreComercial . "',
                        nitFormato = '" . $nitFormato . "',
                        nit = '" . $nit . "',
                        NRCFormato = '" . $ncrFormato . "',
                        NRC = '" . $ncr . "',
                        actividadEconomica1='" . $actividad1 . "',
                        actividadEconomica2='" . $actividad2 . "',
                        actividadEconomica3='" . $actividad3 . "',
                        categoria='" . $categoria . "',
                        direccionNRC='" . $direccionNRC . "',
                        representanteLegal='" . $representante . "',
                        duiRepresentanteFormato='" . $duiRepresentanteFormato . "',
                        duiRepresentante='" . $duiRepresentante . "',
                        departamento='" . $departamento . "',
                        municipio='" . $municipio . "',
                        duipersonaRecibeFacturaFormato='" . $duipersonaRecibeFacturaFormato . "',
                        duipersonaRecibeFactura='" . $duipersonaRecibeFactura . "',
                        nombresRecibeFactura='" . $nombresRecibeFactura . "',
                        apellidosRecibeFactura='" . $apellidosRecibeFactura . "',
                        correo1='" . $correo1 . "',
                        correo2='" . $correo2 . "',
                        telefono1Formato='" . $telefono1Formato . "',
                        telefono1='" . $telefono1 . "',
                        telefono2Formato='" . $telefono2Formato . "',
                        telefono2='" . $telefono2 . "'
                WHERE nitFormato = '" . $nitFormato . "'
                        AND NRCFormato = '" . $ncrFormato . "'";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo json_encode(
                                        array(
                                                'error' => array(
                                                        'msg' => $e->getMessage(),
                                                        'code' => $e->getCode(),
                                                ),
                                        )
                                );
                        }
                }
        }
        return $error;
}

function insertar_persona_natural_inscrita(
        $nombre,
        $nombreComercial,
        $duiFormato,
        $dui,
        $nitFormato,
        $nit,
        $ncrFormato,
        $ncr,
        $actividad1,
        $actividad2,
        $actividad3,
        $direccionNRC,
        $categoria,
        $departamento,
        $municipio,
        $duipersonaRecibeFacturaFormato,
        $duipersonaRecibeFactura,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");

        $query = " INSERT INTO ILCMASTER..PersonaNaturalInscritaLicorera(nombre,nombreComercial,
        duiFormato,dui,nitFormato,nit,NRCFormato,NRC,actividadEconomica1,actividadEconomica2,actividadEconomica3,
        direccionNRC,categoria,departamento,municipio,duipersonaRecibeFacturaFormato, duipersonaRecibeFactura,
        nombresRecibeFactura,apellidosRecibeFactura,correo1,correo2,telefono1Formato,telefono1,telefono2Formato,telefono2,fechaRegistro) 
    VALUES('" . $nombre . "','" . $nombreComercial . "','" . $duiFormato . "','" . $dui . "','" . $nitFormato . "','" . $nit . "','" . $ncrFormato . "','" . $ncr . "'
    ,'" . $actividad1 . "','" . $actividad2 . "','" . $actividad3 . "','" . $direccionNRC . "','" . $categoria . "','" . $departamento . "','" . $municipio . "'
    ,'" . $duipersonaRecibeFacturaFormato . "','" . $duipersonaRecibeFactura . "','" . $nombresRecibeFactura . "','" . $apellidosRecibeFactura . "'
    ,'" . $correo1 . "','" . $correo2 . "','" . $telefono1Formato . "','" . $telefono1 . "','" . $telefono2Formato . "','" . $telefono2 . "',GETDATE()) ";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
        //var_dump($query);
}
function insertar_persona_natural(
        $nombre,
        $duiFormato,
        $dui,
        $nitFormato,
        $nit
        ,
        $direccionNotificacion,
        $departamento,
        $municipio,
        $nombresRecibeFactura,
        $apellidosRecibeFactura,
        $correo1,
        $correo2
        ,
        $telefono1Formato,
        $telefono1,
        $telefono2Formato,
        $telefono2
) {
        $error = 0;
        require("../sqlconnection/cn.php");

        $query = " INSERT INTO ILCMASTER..PersonaNaturalLicorera(nombre,duiFormato,dui,nitFormato,nit
    ,direccionNotificacion,departamento,municipio,nombresRecibeFactura,apellidosRecibeFactura
    ,correo1,correo2,telefono1Formato,telefono1,telefono2Formato,telefono2,fechaRegistro) 
    VALUES('" . $nombre . "','" . $duiFormato . "','" . $dui . "','" . $nitFormato . "','" . $nit . "'
    ,'" . $direccionNotificacion . "','" . $departamento . "','" . $municipio . "','" . $nombresRecibeFactura . "','" . $apellidosRecibeFactura . "'
    ,'" . $correo1 . "','" . $correo2 . "','" . $telefono1Formato . "','" . $telefono1 . "','" . $telefono2Formato . "','" . $telefono2 . "',GETDATE()) ";
        $stmt = sqlsrv_query($conexion, $query);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        $error = 1;
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        return $error;
        //var_dump($query);
}
function get_incoterms()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT I.codigoNombre AS 'nombre' FROM ILCMASTER..INCOTERMS AS I");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_transporte()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT T.codigoNombre AS 'nombre' FROM ILCMASTER..Transporte AS T");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_regimen()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT r.descripcion as 'nombre' FROM ILCMASTER..Regimen as R");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_recinto()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT r.codigoNombre as 'nombre' FROM ILCMASTER..RecintoFiscal as R");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_pais()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT P.codigoNombre AS 'nombre' FROM ILCMASTER..Pais AS P");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_giro()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT CONVERT(VARCHAR,G.codigo)+' '+G.actividadEconomica as 'actividad' 
    FROM ILCMASTER..Giros as G");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['actividad'];
                $i++;
        }
        return $result;
}
function get_municipio($departamento)
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT M.nombre FROM ILCMASTER..Departamento as D
    INNER JOIN ILCMASTER..Municipio AS M
    ON D.id = M.idDepartamento
    WHERE D.nombre = '" . $departamento . "'");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}
function get_departamento()
{
        require("../sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT D.nombre FROM ILCMASTER..Departamento AS D  ");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['nombre'];
                $i++;
        }
        return $result;
}

function update_linea($update)
{
        require("../assets/sqlconnection/cn.php");
        $query = "UPDATE LACABANA..[LACABANA\$Purchase Request Line] 
    SET No_ = '" . $update[2] . "',Description = '" . $update[3] . "'
    WHERE [Request No_] = '" . $update[0] . "' AND No_ = '" . $update[1] . "' ";
        sqlsrv_query($conexion, $query);
}
function insertar_bitacora($array)
{
        require("../assets/sqlconnection/cn.php");
        $query = " INSERT INTO ILC_Presupuesto..BitacoraCambioItem(Pedido,TipoMovimiento,[No Item],Descripcion,Usuario,Fecha) 
    VALUES('" . $array[0] . "','" . $array[1] . "','" . $array[2] . "','" . $array[3] . "','" . $array[4] . "',CURRENT_TIMESTAMP) ";
        sqlsrv_query($conexion, $query);
        //var_dump($query);
}
function ordenar($arrayPedido)
{
        $user = $_SESSION['USERID'];
        $pedido = array($arrayPedido[1][1], $arrayPedido[0], $arrayPedido[1][2], $arrayPedido[1][3], $user);
        insertar_bitacora($pedido);
        return $pedido;
}

function get_items_solicitud($pedido)
{
        require("../assets/sqlconnection/cn.php");
        $data = array();
        $user = $_SESSION["USERID"];
        $callSP = "{call ILC_Presupuesto.dbo.Budget_Pedido_Flujo_Solicitud(?,?)}";
        $params = array(
                $user,
                $pedido
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = "    ";
                        $data[$i][1] = $row["Pedido"];
                        $data[$i][2] = $row["No. Item"];
                        $data[$i][3] = ($row["Description"]);
                        $data[$i][4] = $row["Cantidad"];
                        $data[$i][5] = $row["Gasto"];
                        $data[$i][6] = $row["Monto Pedido"];
                        $data[$i][7] = $row["Estado"];
                        $data[$i][8] = $row["Observacion"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function get_pedido_flujo($pedido)
{
        require("../assets/sqlconnection/cn.php");
        $data = array();
        $user = $_SESSION["USERID"];
        $callSP = "{call ILC_Presupuesto.dbo.Budget_Pedido_Flujo(?,?)}";
        $params = array(
                $user,
                $pedido
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        //Ajustar si cambia la tabla, quitar el vacio
                        $data[$i][0] = "";
                        $data[$i][1] = $row["Pedido"];
                        $data[$i][2] = $row["No. Item"];
                        $data[$i][3] = ($row["Description"]);
                        $data[$i][4] = $row["Cantidad"];
                        $data[$i][5] = $row["Gasto"];
                        $data[$i][6] = $row["Monto Pedido"];
                        $data[$i][7] = $row["Estado"];
                        $data[$i][8] = $row["Observacion"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}

function get_pedido($pedido)
{
        require("../assets/sqlconnection/cn.php");

        $query = sqlsrv_query($conexion, "SELECT L.No_ as Item, L.Description, CONVERT(DECIMAL(10,2),L.[Requested Quantity]) as Cantidad, CONVERT(DECIMAL(10,2),L.[Estimated Price]) as Precio,
    H.[Shortcut Dimension 2 Code] as Presupuesto, H.[Budget Dimension 1 Code] as CentroServicio,H.[Shortcut Dimension 1 Code] as CECO
    FROM LACABANA..[LACABANA\$Purchase Request Header] AS H
    INNER JOIN LACABANA..[LACABANA\$Purchase Request Line] AS L
    ON H.No_ = L.[Request No_]
    WHERE H.No_ = '" . $pedido . "'  ");

        $result = array();
        $i = 0;
        while ($row = sqlsrv_fetch_array($query)) {
                $result[$i][0] = $row['Item'];
                $result[$i][1] = ($row['Description']);
                $result[$i][2] = $row['Cantidad'];
                $result[$i][3] = $row['Precio'];
                $i++;
        }
        return $result;
}
function gastos_fuera_pedido()
{
        require("../assets/sqlconnection/cn.php");
        $data = array();
        $user = $_SESSION["USERID"];
        $callSP = "{call ILC_Presupuesto.dbo.Budget_Gasto_Fuera_Cambio(?)}";
        $params = array(
                $user
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["Pedido"];
                        $data[$i][1] = $row["Fecha Solicitud"];
                        $data[$i][2] = $row["CECO"];
                        $data[$i][3] = $row["Nombre CECO"];
                        $data[$i][4] = $row["OC"];
                        $data[$i][5] = $row["No. Item"];
                        $data[$i][6] = $row["Description"];
                        $data[$i][7] = $row["Cantidad Recibida"];
                        $data[$i][8] = $row["Gasto"];
                        $data[$i][9] = $row["Presupuesto"];
                        $data[$i][10] = $row["Centro Servicio"];
                        $data[$i][11] = $row["Tipo"];
                        $data[$i][12] = $row["Estado"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function presupuesto_disponible()
{
        require("../assets/sqlconnection/cn.php");
        $data = array();
        $callSP = "{call ILC_Presupuesto.dbo.Budget_Presupuestos()}";
        $stmt = sqlsrv_query($conexion, $callSP);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["tipoPresupuesto"];
                        $data[$i][1] = $row["Nombre"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function cecos_disponible()
{
        require("../assets/sqlconnection/cn.php");
        $data = array();
        $user = $_SESSION['USERID'];
        $callSP = "{call ILC_Presupuesto.dbo.CECOsAcceso_Descript(?)}";
        $params = array(
                $user
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["CentroCosto"];
                        $data[$i][1] = $row["Descripcion"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function movimientos_compras_exterior($user)
{
        require("../assets/sqlconnection/cn.php");
        $data = array();

        $callSP = "{call ILC_Presupuesto.dbo.Exterior_Gasto(?)}";
        $params = array(
                $user
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["Pedido"];
                        $data[$i][1] = $row["Fecha Solicitud"];
                        $data[$i][2] = $row["CECO"];
                        $data[$i][3] = $row["Nombre CECO"];
                        $data[$i][4] = $row["Solicitante"];
                        $data[$i][5] = $row["OC"];
                        $data[$i][6] = $row["No. Item"];
                        $data[$i][7] = $row["Description"];
                        $data[$i][8] = $row["Cantidad Pedido"];
                        $data[$i][9] = $row["Cantidad Recibida"];
                        $data[$i][10] = $row["Gasto"];
                        $data[$i][11] = $row["Monto Pedido"];
                        $data[$i][12] = $row["Presupuesto"];
                        $data[$i][13] = $row["Centro Servicio"];
                        $data[$i][14] = $row["Tipo"];
                        $data[$i][15] = $row["Estado"];
                        $data[$i][16] = $row["Observacion"];
                        $data[$i][17] = $row["Cuenta"];
                        $data[$i][18] = $row["Nombre Cuenta"];
                        $data[$i][19] = $row["Presu Pedido"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function movimientos_compras($user)
{
        require("../assets/sqlconnection/cn.php");
        $data = array();

        $callSP = "{call ILC_Presupuesto.dbo.Budget_Gasto(?)}";
        $params = array(
                $user
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);

        if ($stmt === false) {
                if (($errors = sqlsrv_errors()) != null) {
                        foreach ($errors as $error) {
                                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                                echo "code: " . $error['code'] . "<br />";
                                echo "message: " . $error['message'] . "<br />";
                        }
                }
        }
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["Pedido"];
                        $data[$i][1] = $row["Fecha Solicitud"];
                        $data[$i][2] = $row["CECO"];
                        $data[$i][3] = $row["Nombre CECO"];
                        $data[$i][4] = $row["Solicitante"];
                        $data[$i][5] = $row["OC"];
                        $data[$i][6] = $row["No. Item"];
                        $data[$i][7] = $row["Description"];
                        $data[$i][8] = $row["Cantidad Pedido"];
                        $data[$i][9] = $row["Cantidad Recibida"];
                        $data[$i][10] = $row["Gasto"];
                        $data[$i][11] = $row["Monto Pedido"];
                        $data[$i][12] = $row["Presupuesto"];
                        $data[$i][13] = $row["Centro Servicio"];
                        $data[$i][14] = $row["Tipo"];
                        $data[$i][15] = $row["Estado"];
                        $data[$i][16] = $row["Observacion"];
                        $data[$i][17] = $row["Ppto Pedido"];
                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}
function datos_compras($ceco, $ppto)
{
        require("../assets/sqlconnection/cn.php");
        $data = array();

        $callSP = "{call ILC_Presupuesto.dbo.Budget_Compras(?,?)}";
        $params = array(
                $ceco,
                $ppto
        );
        $stmt = sqlsrv_query($conexion, $callSP, $params);
        do {
                $i = 0;
                while ($row = sqlsrv_fetch_array($stmt)) {
                        $data[$i][0] = $row["Pedido"];
                        $data[$i][1] = $row["Fecha Solicitud"];
                        $data[$i][2] = $row["CECO"];
                        $data[$i][3] = $row["Nombre CECO"];
                        $data[$i][4] = $row["Solicitante"];
                        $data[$i][5] = $row["OC"];
                        $data[$i][6] = $row["No. Item"];
                        $data[$i][7] = $row["Description"];
                        $data[$i][8] = $row["Cantidad Pedido"];
                        $data[$i][9] = $row["Cantidad Recibida"];
                        $data[$i][10] = $row["Gasto"];
                        $data[$i][11] = $row["Monto Pedido"];
                        $data[$i][12] = $row["Presupuesto"];
                        $data[$i][13] = $row["Centro Servicio"];
                        $data[$i][14] = $row["Tipo"];
                        $data[$i][15] = $row["Estado"];
                        $data[$i][16] = $row["Observacion"];

                        $i++;
                }
        } while (sqlsrv_next_result($stmt));
        sqlsrv_free_stmt($stmt);
        return $data;
}

?>