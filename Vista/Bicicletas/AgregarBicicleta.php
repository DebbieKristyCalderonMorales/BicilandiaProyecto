<?php

include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div class="container">
    <h1>Agregar nueva bicicleta</h1>
    <div class="content-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulario de registro</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" method="POST" action="BicicletaControl.php" id="registrarBicicleta">
                                <input type="hidden" name="accion" value="insertar">

                                <div class="modal-body row">
                                    <div class="form-group col-lg-6">
                                        <label>Código</label>
                                        <input type="text" name="codigo" id="codigo" class="form-control" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Color</label>
                                        <input type="text" name="color" id="color" class="form-control" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Marca</label>
                                        <input type="text" name="marca" id="Marca" class="form-control" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="tipo">Estado</label>
                                        <select id="estado" name="estado" class="form-control">
                                            <option selected>Seleccionar Estado</option>
                                            <option value="1">Disponible</option>
                                            <option value="0">No disponible</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="Agregar" onclick="Confirmacion2()">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php

include_once '../Recursos/Menu/Footer.php';
