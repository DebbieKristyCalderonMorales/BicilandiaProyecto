<?php
include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>

<iframe  width="1000" height="76"></iframe>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Bicicletas</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Agregar nueva bicicleta</span></a>
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
                <?php foreach ($objbicicleta as $b) { ?>
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
                        <td>
                            <a onclick="EditarBicicleta(<?php echo $b->idBicicleta; ?>)" class="edit">
                                <i class="bi bi-pencil-square" title="Editar"></i>
                            </a>
                            <a onclick="EliminarBicicleta(<?php echo $b->idBicicleta; ?>)" class="delete">
                                <i class="bi bi-trash" title="Eliminar"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal agregar HTML -->
<div id="addEmployeeModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="BicicletaControl.php" id="registrarBicicleta">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar bicicleta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label>Código</label>
                        <input type="text" name="codigo" id="codigo" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Color</label>
                        <input type="text" name="color" id="color" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Marca</label>
                        <input type="text" name="marca" id="marca" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option selected>Seleccionar Estado</option>
                            <option value="1">Disponible</option>
                            <option value="4">No disponible</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Agregar" onclick="Confirmacion()">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../Recursos/Menu/Footer.php';
