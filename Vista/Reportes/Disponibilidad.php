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
                    <h2><b>Disponibilidad de Bicicletas</b></h2>
                </div>
                <div class="col-sm-6">
                    <a onclick="ReporteDisponibilidad()" class="btn btn-success"><i class="bi bi-plus-circle"></i> <span>Generar Reporte</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Código</th>
                    <th>Color</th>
                    <th>Marca</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objbicicletas as $b) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $b->codigo; ?></td>
                        <td><?php echo $b->color; ?></td>
                        <td><?php echo $b->marca; ?></td>
                        <td><?php
                            if ($b->estado == '1') {
                                echo 'Disponible';
                            } else if($b->estado == '2'){
                                echo 'Mantenimiento';
                            } else if($b->estado == '3'){
                                echo 'En alquiler';
                            } else {
                                echo 'No disponible';
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