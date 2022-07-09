<?php

require_once '../Recursos/Menu/Header.php';
include_once '../Config/Conexion.php';
?>
<iframe src='../Recursos/Menu/Header.php' width="1000" height="76"></iframe>
<div>
    <section class="statistics mt-4">
        <div class="row col-lg-12">
            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="bi bi-people-fill fs-2 text-center bg-primary rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">2</h3> <span class="d-block ms-2">Usuarios</span>
                        </div>
                        <p class="fs-2 mb-0">Se muestra la cantidad de usuarios registrados</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="bi bi-bicycle fs-2 text-center bg-danger rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">1</h3> <span class="d-block ms-2">Bicicletas</span>
                        </div>
                        <p class="fs-normal mb-0">Se muestra la cantidad de bicicletas disponibles</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center p-3">
                    <i class="bi bi-tools fs-2 text-center bg-success rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">0</h3><span class="d-block ms-2">Bicicletas</span>
                        </div>
                        <p class="fs-normal mb-0">Se muestra la cantidad de bicicletas en mantenimiento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php

require '../Recursos/Menu/Footer.php';
