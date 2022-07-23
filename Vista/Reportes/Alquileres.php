<?php
require_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>
<iframe width="1000" height="76"></iframe>


<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Alquiler</b></h2>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-success"><i class="bi bi-plus-circle"></i> <span>Imprimir Reporte</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Bicicleta</th>
                    <th>Fecha</th>
                    <th>Hora de Salida</th>
                    <th>Hora de Devolución</th>
                    <th>Cliente</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objalquiler as $a) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $a->codigo; ?></td>
                        <td><?php echo $a->fecha; ?></td>
                        <td><?php echo $a->horaSalida; ?></td>
                        <td><?php echo $a->horaEntrada; ?></td>
                        <td><?php echo $a->cliente; ?></td>
                        <td><?php echo $a->nombres; ?></td>
                        <td><?php
                            if ($a->estado == '1') {
                                echo 'En Alquiler';
                            } else {
                                echo 'Devuelto';
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require '../Recursos/Menu/Footer.php';
