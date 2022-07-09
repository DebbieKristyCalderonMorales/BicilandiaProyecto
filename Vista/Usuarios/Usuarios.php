<?php
include_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Usuarios</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Agregar nuevo usuario</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Rol de usuario</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objusuarios as $u) { ?>
                    <tr>
                        <td><?php echo $u->dni; ?></td>
                        <td><?php echo $u->nombres; ?></td>
                        <td><?php echo $u->apellidos; ?></td>
                        <td><?php echo $u->direccion; ?></td>
                        <td><?php echo $u->telefono; ?></td>
                        <td><?php echo $u->correo; ?></td>
                        <td><?php echo $u->usuario; ?></td>
                        <td><?php echo $u->rolUsuario; ?></td>
                        <td><?php
                            if ($u->estado == '1') {
                                echo 'Activo';
                            } else {
                                echo 'Inhabilitado';
                            }
                            ?>
                        </td>
                        <td>
                            <a href="?accion=cargar&idUsuario=<?php echo $u->idUsuario; ?>" class="edit"><i class="bi bi-pencil-square" title="Editar"></i></a>
                            <a href="UsuariosControl.php?accion=eliminar&id=<?php echo $u->idUsuario; ?>" class="delete"><i class="bi bi-trash" title="Eliminar"></i></a>
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
            <form method="POST" action="UsuariosControl.php" id="registrarUsuario">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label>DNI</label>
                        <input type="text" name="dni" id="dni" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nombres</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <textarea class="form-control" name="direccion" id="direccion" required></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contraseña</label>
                        <input type="password" name="pass" id="pass" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo">Rol de usuario</label>
                        <select id="tipo" name="tipo" class="form-control">
                            <option selected>Seleccionar Rol</option>
                            <option value="2">Mecánico</option>
                            <option value="3">Encargado Alquiler</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option selected>Seleccionar Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">No Activo</option>
                        </select>
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
<!-- Modal Editar HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="UsuariosControl.php" id="editarUsuario">
                <input type="hidden" name="accion" value="editar">
                <div class="modal-header">
                    <h4 class="modal-title">Editar datos de Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label>DNI</label>
                        <input type="text" name="dni" id="dni" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nombres</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <textarea class="form-control" name="direccion" id="direccion" required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Rol de Usuario</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option selected>Seleccionar Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">No Activo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal eliminar HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de querer eliminar estos registros?</p>
                    <p class="text-warning"><small>Recuerda que está acción ya no se puede deshacer.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#registrarUsuario").validate({
            rules: {
                nombres: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {
                nombres: {
                    required: 'No puede dejar el campo vacio',
                    minlength: 'El nombre debe tener más de 3 caracteres'
                }
            }
        });

    });
</script>

<?php
include_once '../Recursos/Menu/Footer.php';
