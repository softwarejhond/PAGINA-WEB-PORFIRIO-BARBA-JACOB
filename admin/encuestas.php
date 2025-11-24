<?php
include "../controllers/encuesta_egresados/conexion.php";
include "partials/header.php";
include "partials/sidebar.php";

$query = "SELECT * FROM encuesta_egresados ORDER BY id DESC";
$result = $conn->query($query);
?>

<div class="content">
    <h2 class="mb-4">Encuesta de Egresados</h2>

    <div class="table-responsive">
        <table class="table table-sm text-center table-borderless">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Documento</th>
                    <th>Programa</th>
                    <th>Teléfono</th>
                    <th>Satis. Programa</th>
                    <th>Satis. Institución</th>
                    <th>Trabaja</th>
                    <th>Lugar</th>
                    <th>Cargo</th>
                    <th>Empresa</th>
                    <th>Contrato</th>
                    <th>Nivel</th>
                    <th>Continuó estudios</th>
                    <th>Dónde</th>
                    <th>Observación</th>
                    <th>Email</th>
                    <th>Actualizado</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["documento"] ?></td>
                    <td><?= $row["programa"] ?></td>
                    <td><?= $row["telefono"] ?></td>
                    <td><?= $row['satisfecho_programa'] ?? 'No registrado' ?></td>
                    <td><?= $row['satisfecho_institucion'] ?? 'No registrado' ?></td>
                    <td><?= $row["trabaja"] ?></td>
                    <td><?= $row["lugar_trabajo"] ?></td>
                    <td><?= $row["cargo"] ?></td>
                    <td><?= $row["tipo_empresa"] ?></td>
                    <td><?= $row["tipo_contrato"] ?></td>
                    <td><?= $row["nivel_salarial"] ?></td>
                    <td><?= $row["continuo_estudios"] ?></td>
                    <td><?= $row["donde_estudio"] ?></td>
                    <td><?= $row["observacion"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["actualizado"] ?></td>
                    <td><?= $row['fecha_registro'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "partials/footer.php"; ?>