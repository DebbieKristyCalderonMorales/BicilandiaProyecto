<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
?>

<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Repuestos</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Agregar nuevo repuesto</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objrepuesto as $r) { ?>


                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $r->nombre; ?></td>
                        <td><?php echo $r->stock; ?></td>
                        <td><?php echo $r->precio; ?></td>
                        <td>
                            <a onclick="EditarRepuesto(<?php echo $r->idRepuesto; ?>)" class="edit">
                                <i class="bi bi-pencil-square" title="Editar"></i>
                            </a>
                            <a onclick="EliminarRepuesto(<?php echo $r->idRepuesto; ?>)" class="delete">
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
            <form method="POST" action="RepuestoControl.php" id="registrarRepuesto">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Repuesto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio" id="precio" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Agregar" onclick="Confirmacion2()">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../Recursos/Menu/FooterM.php';
