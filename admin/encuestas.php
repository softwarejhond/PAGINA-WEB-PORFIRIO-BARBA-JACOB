<?php
include "conexion.php";
include "partials/header.php";
include "partials/sidebar.php";

$query = "SELECT * FROM encuesta_egresados ORDER BY id DESC";
$result = $conn->query($query);
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css"/>

<div class="content">
    <h2 class="mb-4">Encuesta de Egresados</h2>

    <!-- Botón para exportar a Excel -->
    <button id="exportExcel" class="btn btn-success mb-3">Exportar a Excel</button>

    <div class="table-responsive">
        <!-- DataTables CDN CSS -->
        <table id="egresadosTable" class="table table-sm text-center table-borderless">
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

<?php include "footer.php"; ?>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- DataTables CDN JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<!-- SheetJS CDN -->
<script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
<script>
$(document).ready(function() {
    $('#egresadosTable').DataTable({
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
        }
    });

    // Exportar a Excel usando SheetJS con loader y confirmación
    $('#exportExcel').on('click', function() {
        Swal.fire({
            title: 'Generando archivo...',
            text: 'Por favor espera',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        setTimeout(function() {
            var table = document.getElementById('egresadosTable');
            var wb = XLSX.utils.table_to_book(table, {sheet:"Encuesta Egresados"});
            XLSX.writeFile(wb, 'encuesta_egresados.xlsx');
            Swal.fire({
                icon: 'success',
                title: '¡Descarga completa!',
                text: 'El archivo Excel se ha descargado correctamente.'
            });
        }, 800); // Simula tiempo de generación
    });
});
</script>

<style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
.content {
    flex: 1;
}
.footer-bottom {
    background-color: #001C9B !important;
    padding-top: 16px !important;
    padding-bottom: 32px !important;
    color: #fff;
    width: 100%;
    text-align: center;
}
</style>