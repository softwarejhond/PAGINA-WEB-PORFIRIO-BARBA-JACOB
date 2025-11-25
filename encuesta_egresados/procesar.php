<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta enviada</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .ventana-exito {
            background: white;
            width: 380px;
            padding: 25px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .ventana-exito h2 {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .ventana-exito p {
            color: #666;
            font-size: 15px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <div class="ventana-exito">
        <h2>¡Gracias por actualizar la información!</h2>
        <p>Tu respuesta ha sido registrada correctamente.</p>

        <a href="../../egresados.php" class="btn btn-primary w-100">
            Volver
        </a>
    </div>
</body>
</html>

<?php
include "conexion.php";

// Recoger datos del formulario
$documento = $_POST['documento'];
$programa = $_POST['programa'];
$telefono = $_POST['telefono'];
$satis_p = $_POST['satis_programa'];
$satis_i = $_POST['satis_institucion'];
$trabaja = $_POST['trabaja'];

$lugar = ($trabaja == "SI") ? $_POST['lugar_trabajo'] : "NA";
$cargo = ($trabaja == "SI") ? $_POST['cargo'] : "NA";
$tipo_empresa = ($trabaja == "SI") ? $_POST['tipo_empresa'] : "NA";
$tipo_contrato = ($trabaja == "SI") ? $_POST['tipo_contrato'] : "NA";
$nivel = ($trabaja == "SI") ? $_POST['nivel_salarial'] : "NA";
$continuo = $_POST['continuo'];
$donde_estudio = ($continuo == "SI") ? $_POST['donde_estudio'] : "NA";

$observacion = $_POST['observacion'];
$email = $_POST['email'];
$actualizado = $_POST['actualizado'];

// Insertar en BD
$stmt = $conn->prepare("INSERT INTO encuesta_egresados
(documento, programa, telefono, satisfecho_programa, satisfecho_institucion, trabaja,
 lugar_trabajo, cargo, tipo_empresa, tipo_contrato, nivel_salarial,
 continuo_estudios, donde_estudio, observacion, email, actualizado)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param(
    "ssssssssssssssss",
    $documento, $programa, $telefono, $satis_p, $satis_i, $trabaja,
    $lugar, $cargo, $tipo_empresa, $tipo_contrato, $nivel,
    $continuo, $donde_estudio, $observacion, $email, $actualizado
);

$stmt->execute();
$stmt->close();
$conn->close();

?>
