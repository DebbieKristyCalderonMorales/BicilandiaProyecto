<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Registrar Bicicletas en Mantenimiento</h4>
                </div>
            </div>
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

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="repuesto">Repuestos</label>
                                            <select id="repuesto" name="repuesto" class="form-control">
                                                <option selected>Seleccionar Repuesto</option>
                                                <option value="1">Aro</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bicicleta">Bicicletas</label>
                                            <select id="bicicleta" name="bicicleta" class="form-control">
                                                <option selected>Seleccionar Bicicleta</option>
                                                <option value="2">212830032-B4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" required>
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
include_once '../Recursos/Menu/FooterM.php';
