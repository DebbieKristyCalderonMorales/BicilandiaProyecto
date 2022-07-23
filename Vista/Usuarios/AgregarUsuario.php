<?php

include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div class="container">
    <h1>Agregar nuevo usuario</h1>
    <div class="content-body">
        <div class="row">
            <div class="col-lg-16">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Formulario de registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" method="POST" action="UsuariosControl.php" id="registrarUsuario">
                                <input type="hidden" name="accion" value="insertar">

                                <div class="modal-body row">
                                    <div class="form-group col-sm-2">
                                        <label>DNI</label>
                                        <input type="text" name="dni" id="dni" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" id="nombres" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Dirección</label>
                                        <textarea class="form-control" name="direccion" id="direccion" required></textarea>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Teléfono</label>
                                        <input type="text" name="telefono" id="telefono" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Correo</label>
                                        <input type="email" name="correo" id="correo" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Contraseña</label>
                                        <input type="password" name="pass" id="pass" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="tipo">Rol de usuario</label>
                                        <select id="tipo" name="tipo" class="form-control">
                                            <option selected>Seleccionar Rol</option>
                                            <option value="2">Mecánico</option>
                                            <option value="3">Encargado Alquiler</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="estado">Estado</label>
                                        <select id="estado" name="estado" class="form-control">
                                            <option selected>Seleccionar Estado</option>
                                            <option value="1">Activo</option>
                                            <option value="0">No Activo</option>
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
