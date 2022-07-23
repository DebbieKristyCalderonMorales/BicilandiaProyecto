<?php
include_once '../Recursos/Menu/HeaderE.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderE.php' width="1000" height="76"></iframe>

<div class="content-body">
    <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: #e3fff7">
                        <h4 class="card-title" style="font-size: 30px; font-family: sans-serif;">
                            BIENVENIDO USUARIO <?php echo $_SESSION['nombres']; ?>, <?php echo $_SESSION['apellidos']; ?> 
                        </h4>
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
        </div>
    </div>


<?php
include_once '../Recursos/Menu/FooterE.php';
