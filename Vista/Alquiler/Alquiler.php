<?php
include_once '../Recursos/Menu/HeaderE.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderE.php' width="1000" height="76"></iframe>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Alquiler</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Registrar nuevo alquiler</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
            <th>Bicicleta</th>
            <th>Fecha</th>
            <th>Hora de Salida</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Acción</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($objalquiler as $a) { ?>
                    <tr>
                        <td><?php echo $a->codigo; ?></td>
                        <td><?php echo $a->fecha; ?></td>
                        <td><?php echo $a->horaSalida; ?></td>
                        <td><?php echo $a->cliente; ?></td>
                        <td><?php
                    if ($a->estado == '1') {
                        echo 'En Alquiler';?>
                        </td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil-square" data-toggle="tooltip" title="Editar"></i></a>
                        </td>
                        <?php } else {
                        echo 'Devuelto';
                    }
                    ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal agregar HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="AlquilerControl.php" id="registrarAlquiler">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar alquiler</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label for="bicicleta">Bicicleta</label>
                        <select id="bicicleta" name="bicicleta" class="form-control">
                            <option selected>Seleccionar Bicicleta</option>
                            <?php foreach ($objbicialquiladas as $ba) { ?>
                                <option value="<?php echo $ba->idBicicleta; ?>"><?php echo $ba->codigo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Hora de Salida</label>
                        <input type="text" id="horas" name="horas" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cliente</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option value="1">Alquilar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Editar HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Datos bicicleta alquilada</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label>Bicicleta</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Fecha</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Hora de Salida</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Hora de Entrada</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Cliente</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option selected>Seleccionar Estado</option>
                            <option value="1">En alquiler</option>
                            <option value="0">Devuelto</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once '../Recursos/Menu/FooterE.php';
