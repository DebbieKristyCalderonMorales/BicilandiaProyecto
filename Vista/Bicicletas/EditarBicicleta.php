<?php
include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';

foreach ($objunabici as $ub) {}
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div class="container">
                <h1>Editar Bicicleta</h1>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulario de edición</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action="BicicletaControl.php" id="editarBicicleta">
                                    <input type="hidden" name="accion" value="editar">

                                    <div class="modal-body row">
                                        <div class="form-group col-md-6">
                                            <label>Código</label>
                                            <input type="hidden" name="id" value="<?php echo $ub->idBicicleta; ?>">
                                            <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $ub->codigo; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Color</label>
                                            <input type="text" name="color" id="color" class="form-control" value="<?php echo $ub->color; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Marca</label>
                                            <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $ub->marca; ?>" required>
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
                                        <input type="submit" class="btn btn-success" value="Guardar Cambios" onclick="Confirmacion()">
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
include_once '../Recursos/Menu/Footer.php';
