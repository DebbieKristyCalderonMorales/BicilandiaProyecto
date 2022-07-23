<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Agregar nuevo repuesto </h4>
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
                                <form class="form-valide" method="POST" action="RepuestoControl.php" id="registrarRepuesto">
                                    <input type="hidden" name="accion" value="insertar">

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" id="stock" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="text" name="precio" id="precio" class="form-control" required>
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

</div>

<?php
include_once '../Recursos/Menu/FooterM.php';