<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta de Egresados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f4f6f9;
        }
        .card-custom {
            max-width: 600px;
            margin: 40px auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #001C9B !important;
            color: white !important;
            text-align: center;
            padding: 18px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 12px 12px 0 0 !important;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-enviar {
            background-color: #001C9B !important;
            border-color: #001C9B !important;
            padding: 8px 25px;
            font-size: 16px;
            display: block;
            margin: 0 auto;
            width: fit-content;
        }

        .btn-volver {
            background-color: #001C9B !important;
            border-color: #001C9B !important;
            padding: 8px 25px;
            font-size: 16px;
            display: block;
            margin: 0 auto;
            width: fit-content;
        }

        .btn-enviar:hover {
            background-color: #0d2cda !important;
        }

        .btn-volver:hover {
            background-color: #0d2cda !important;
        }
    </style>
</head>

<body>

<div class="card card-custom">
    <div class="card-header">
        <img src="../../img/logo.png" alt="Logo" style="width:90px; margin-bottom:10px;">
        <br>
        Encuesta de Egresados
    </div>

    <div class="card-body">

        <form action="procesar.php" method="POST">

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Documento</label>
                    <input type="text" name="documento" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Programa</label>
                    <input type="text" name="programa" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Está satisfecho con el programa?</label>
                <select class="form-select" name="satis_programa" required>
                    <option value="">Seleccione...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Está satisfecho con la institución?</label>
                <select class="form-select" name="satis_institucion" required>
                    <option value="">Seleccione...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Trabaja actualmente?</label>
                <select class="form-select" name="trabaja" id="trabaja" onchange="mostrarTrabajo()" required>
                    <option value="">Seleccione...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div id="trabajoCampos" style="display:none;">
                <div class="mb-3">
                    <label class="form-label">¿Dónde trabaja?</label>
                    <input type="text" name="lugar_trabajo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cargo que desempeña</label>
                    <input type="text" name="cargo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo de empresa</label>
                    <select class="form-select" name="tipo_empresa">
                        <option value="">Seleccione...</option>
                        <option value="servicio">Servicio</option>
                        <option value="oficial">Oficial</option>
                        <option value="privada">Privada</option>
                        <option value="ong">ONG</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo de contrato</label>
                    <select class="form-select" name="tipo_contrato">
                        <option value="">Seleccione...</option>
                        <option value="indefinido">Indefinido</option>
                        <option value="fijo">Fijo</option>
                        <option value="prestacion">Prestación de servicios</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nivel salarial</label>
                    <select class="form-select" name="nivel_salarial">
                        <option value="">Seleccione...</option>
                        <option value="1_2">1 a 2 SMLV</option>
                        <option value="superior">Superior</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Continuó con sus estudios?</label>
                <select class="form-select" name="continuo" id="continuo" onchange="mostrarEstudios()" required>
                    <option value="">Seleccione...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mb-3" id="dondeEstudio" style="display:none;">
                <label class="form-label">¿Dónde?</label>
                <input type="text" name="donde_estudio" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Observación</label>
                <textarea name="observacion" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">¿La información está actualizada?</label>
                <select class="form-select" name="actualizado" required>
                    <option value="ok">OK</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-enviar px-4 me-1" style="color:white;">
                    Enviar
                </button>

                <a href="../../egresados.php" class="btn btn-volver px-4 ms-1" style="color:white; text-decoration:none;">
                    Volver
                </a>
            </div>
     
        </form>

    </div>
</div>

<script>
function mostrarTrabajo() {
    document.getElementById("trabajoCampos").style.display =
        (document.getElementById("trabaja").value === "si") ? "block" : "none";
}

function mostrarEstudios() {
    document.getElementById("dondeEstudio").style.display =
        (document.getElementById("continuo").value === "si") ? "block" : "none";
}
</script>

</body>
</html>
