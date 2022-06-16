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
                    <h2><b>Bicicletas</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Agregar nueva bicicleta</span></a>
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
                    <th>Código</th>
                    <th>Color</th>
                    <th>Marca</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objbicicleta as $b) { ?>


                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td><?php echo $b->codigo; ?></td>
                        <td><?php echo $b->color; ?></td>
                        <td><?php echo $b->marca; ?></td>
                        <td><?php echo $b->estado; ?></td>
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

<?php
include_once '../Recursos/Menu/Footer.php';