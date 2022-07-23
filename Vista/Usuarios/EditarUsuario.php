<?php
include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';

foreach ($objunusuario as $us) {
    
}
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>

<div class="container">
    <h1>Editar usuario</h1>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-16">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Formulario de edición</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action="UsuariosControl.php" id="editarUsuario">
                                    <input type="hidden" name="accion" value="editar">

                                    <div class="modal-body row">
                                        <div class="form-group col-sm-2">
                                            <label>DNI</label>
                                            <input type="hidden" name="id" id="id" value="<?php echo $us->idUsuario; ?>">
                                            <input type="hidden" name="pass" id="pass" value="<?php echo $us->pass; ?>">
                                            <input type="text" name="dni" id="dni" class="form-control" value="<?php echo $us->dni; ?>" required>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Nombres</label>
                                            <input type="text" name="nombres" id="nombres" value="<?php echo $us->nombres; ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellidos" id="apellidos" value="<?php echo $us->apellidos; ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $us->direccion; ?>" required>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Teléfono</label>
                                            <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $us->telefono; ?>" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Correo</label>
                                            <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $us->correo; ?>" required>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>Usuario</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $us->usuario; ?>" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="tipo">Rol de usuario</label>
                                            <select id="tipo" name="tipo" class="form-control">
                                                <option selected>Seleccionar Rol</option>
                                                <option value="2">Mecánico</option>
                                                <option value="3">Encargado Alquiler</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="estado">Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option selected>Seleccionar Estado</option>
                                                <option value="1">Activo</option>
                                                <option value="0">No Activo</option>
                                            </select>
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
    </div>
</div>

<?php
include_once '../Recursos/Menu/Footer.php';
