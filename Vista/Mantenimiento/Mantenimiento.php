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
                    <h2><b>Mantenimiento</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Registrar mantenimiento</span></a>

                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Descripción</th>
                    <th>Bicicleta</th>
                    <th>Repuesto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objmantenimiento as $m) { ?>


                    <tr>
                        <td></td>
                        <td><?php echo $m->descripcion; ?></td>
                        <td><?php echo $m->codigo; ?></td>
                        <td><?php echo $m->nombre; ?></td>
                        <td>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash" data-toggle="tooltip" title="Delete"></i></a>
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
            <form method="POST" action="MantenimientoControl.php" id="registrarMantenimiento">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Mantenimiento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="repuesto">Repuestos</label>
                        <select id="repuesto" name="repuesto" class="form-control">
                            <option selected>Seleccionar Repuesto</option>
                            <?php foreach ($objrepuesto as $r) { ?>
                                <option value="<?php echo $r->idRepuesto; ?>"><?php echo $r->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bicicleta">Bicicletas</label>
                        <select id="bicicleta" name="bicicleta" class="form-control">
                            <option selected>Seleccionar Bicicleta</option>
                            <?php foreach ($objbicicletas as $b) { ?>
                                <option value="<?php echo $b->idBicicleta; ?>"><?php echo $b->codigo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
                        <input type="text" name="nomusu" id="nomusu" class="form-control" value="<?php echo $_SESSION['nombres']; ?>" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Bicicletas</b></h2>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objbicicletas2 as $b) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $b->codigo; ?></td>
                        <td><?php echo $b->color; ?></td>
                        <td><?php echo $b->marca; ?></td>
                        <td>
                            <?php if ($b->estado == '1') { ?>
                                <a onclick="IngresarMantenimiento(<?php echo $b->idBicicleta; ?>)" class="edit">
                                    <i class="bi bi-tools" title="Mantenimiento"></i>
                                </a>
                            <?php } elseif ($b->estado == '2') { ?>
                                <a onclick="PonerFuncionamiento(<?php echo $b->idBicicleta; ?>)" class="edit">
                                    <i class="bi bi-check2-circle" title="Funcionamiento"></i>
                                </a>        
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once '../Recursos/Menu/FooterM.php';
