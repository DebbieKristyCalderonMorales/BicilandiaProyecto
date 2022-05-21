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
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle"></i> <span>Eliminar</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Rol de usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objusuario as $u) { ?>


                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td><?php echo $u->dni; ?></td>
                        <td><?php echo $u->nombres; ?></td>
                        <td><?php echo $u->apellidos; ?></td>
                        <td><?php echo $u->direccion; ?></td>
                        <td><?php echo $u->telefono; ?></td>
                        <td><?php echo $u->correo; ?></td>
                        <td><?php echo $u->usuario; ?></td>
                        <td><?php echo $u->idTipoUsuario; ?></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil-square" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text"> <b></b>  <b></b> </div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Antes</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal agregar HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="UsuariosControl.php" id="registrarUsuario">
                <input type="hidden" name="accion" value="insertar">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>DNI</label>
                        <input type="text" name="dni" id="dni" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" name="direccion" id="direccion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="pass" id="pass" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Rol de Usuario</label>
                        <input type="text" name="tipo" class="form-control" required>
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
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Edit datos de Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>DNI</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Rol de Usuario</label>
                        <input type="text" class="form-control" required>
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
