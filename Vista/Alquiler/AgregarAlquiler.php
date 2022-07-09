<?php
include_once '../Recursos/Menu/HeaderE.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderE.php' width="1000" height="76"></iframe>
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Registrar nuevo alquiler</h4>
            </div>
        </div>
        <div class="row page-titles mx-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulario de registro</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action="AlquilerControl.php" id="registrarAlquiler">
                                    <input type="hidden" name="accion" value="insertar">

                                    <div class="modal-body row">
                                        <div class="form-group col-md-6">
                                            <label for="bicicleta">Bicicleta</label>
                                            <select id="bicicleta" name="bicicleta" class="form-control">
                                                <option selected>Seleccionar Bicicleta</option>
                                                <?php foreach ($objbicicletas as $b) { ?>
                                                    <option value="<?php echo $b->idBicicleta; ?>"><?php echo $b->codigo; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Fecha</label>
                                            <input type="text" id="fecha" name="fecha" class="form-control" required>
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
                                        <input type="submit" class="btn btn-success" value="Agregar">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include_once '../Recursos/Menu/FooterE.php';
