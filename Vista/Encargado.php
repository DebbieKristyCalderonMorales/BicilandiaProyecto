<?php

include_once '../Recursos/Menu/HeaderE.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderE.php' width="1000" height="76"></iframe>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">BIENVENIDO USUARIO <?php echo $_SESSION['nombres']; ?>, <?php echo $_SESSION['apellidos']; ?> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include_once '../Recursos/Menu/FooterE.php';
