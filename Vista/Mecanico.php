<?php
include_once '../Recursos/Menu/HeaderM.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/HeaderM.php' width="1000" height="76"></iframe>
<div>
    <section class="statistics mt-4">
        <div class="row col-lg-12">
            <div class="col-md-6">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="bi bi-tools fs-2 text-center bg-success rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">1</h3> <span class="d-block ms-2">Repuestos</span>
                        </div>
                        <p class="fs-normal mb-0">Se muestra la cantidad de repuestos disponibles</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="bi bi-bicycle fs-2 text-center bg-danger rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">1</h3> <span class="d-block ms-2">Bicicletas</span>
                        </div>
                        <p class="fs-normal mb-0">Se muestra la cantidad de bicicletas en mantenimiento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include_once '../Recursos/Menu/FooterM.php';
