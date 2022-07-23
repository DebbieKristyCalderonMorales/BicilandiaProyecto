<?php
include_once '../Recursos/Menu/HeaderE.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderE.php' width="1000" height="76"></iframe>

<div class="container">
    <h1>Registrar nuevo alquiler</h1>
    <div class="content-body">
        <div class="card">
            <form class="form-valide" method="POST" action="AlquilerControl.php" id="registrarAlquiler">
                <input type="hidden" name="accion" value="insertar">

                <div class="modal-body row">
                    <div class="form-group col-md-3">
                        <label for="bicicleta">Bicicleta</label>
                        <select id="bicicleta" name="bicicleta" class="form-control">
                            <option selected>Seleccionar Bicicleta</option>
                            <?php foreach ($objbicialquiladas as $ba) { ?>
                                <option value="<?php echo $ba->idBicicleta; ?>"><?php echo $ba->codigo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Hora de Salida</label>
                        <input type="text" id="horas" name="horas" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Cliente</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option value="1">Alquilar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
                    </div>

                </div>
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Bicicletas</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Color</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($objbicicletas as $b) { ?>
                        <tr>
                            <td></td>
                            <td><?php echo $b->codigo; ?></td>
                            <td><?php echo $b->color; ?></td>
                            <td><?php echo $b->marca; ?></td>
                            <td>
                                <?php if ($b->estado == '1') { ?>
                                    <a onclick="Alquilar(<?php echo $b->idBicicleta; ?>)" class="alquilar">
                                        <i class="bi bi-box-arrow-right" title="Alquilar"></i>
                                    </a>
                                <?php } elseif ($b->estado == '3') { ?>
                                    <a onclick="Devuelto(<?php echo $b->idBicicleta; ?>)" class="devolver">
                                        <i class="bi bi-box-arrow-in-left" title="Devolver"></i>
                                    </a>        
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include_once '../Recursos/Menu/FooterE.php';
