<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div class="container">
    <h1>Registrar Bicicletas en Mantenimiento</h1>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulario de registro</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action="MantenimientoControl.php" id="registrarMantenimiento">
                                    <input type="hidden" name="accion" value="insertar">

                                    <div class="modal-body row">
                                        <div class="form-group col-sm-4">
                                            <label>Descripción</label>
                                            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="repuesto">Repuestos</label>
                                            <select id="repuesto" name="repuesto" class="form-control">
                                                <option selected>Seleccionar Repuesto</option>
                                                <?php foreach ($objrepuesto as $r) { ?>
                                                    <option value="<?php echo $r->idRepuesto; ?>"><?php echo $r->nombre; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="bicicleta">Bicicletas</label>
                                            <select id="bicicleta" name="bicicleta" class="form-control">
                                                <option selected>Seleccionar Bicicleta</option>
                                                <?php foreach ($objbicicletas as $b) { ?>
                                                    <option value="<?php echo $b->idBicicleta; ?>"><?php echo $b->codigo; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Usuario</label>
                                            <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
                                            <input type="text" name="nomusu" id="nomusu" class="form-control" value="<?php echo $_SESSION['nombres']; ?>" disabled>

                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="submit" class="btn btn-success" value="Agregar">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
