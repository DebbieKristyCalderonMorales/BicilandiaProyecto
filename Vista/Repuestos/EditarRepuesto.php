<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
foreach ($objunrepuesto as $ur) {}
?>
<iframe src='../Recursos/Menu/HeaderM.php' width="1000" height="76"></iframe>


<div class="container">
    <h1>Editar Repuesto</h1>

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Formulario de edición</h3>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" method="POST" action="RepuestoControl.php" id="editarRepuesto">
                            <input type="hidden" name="accion" value="editar">

                            <div class="modal-body row">
                                <div class="form-group col-md-8">
                                    <label>Nombre</label>
                                    <input type="hidden" name="id" value="<?php echo $ur->idRepuesto; ?>">
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $ur->nombre; ?>" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Stock</label>
                                    <input type="text" name="stock" id="stock" class="form-control" value="<?php echo $ur->stock; ?>" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Precio</label>
                                    <input type="text" name="precio" id="precio" class="form-control" value="<?php echo $ur->precio; ?>" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Guardar Cambios">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../Recursos/Menu/FooterM.php';
