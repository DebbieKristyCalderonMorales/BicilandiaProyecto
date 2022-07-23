function EditarBicicleta(idBicicleta) {
    location.href = "BicicletaControl.php?accion=editar&idBicicleta=" + idBicicleta;
}

function EliminarBicicleta(idBicicleta) {
    Swal.fire({
        tittle: "¿Está seguro que desea eliminar esta bicicleta?",
        text: "Si elimina, no se podrá recuperar",
        icon: "error",
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            Swal.fire("Archivo Eliminado Correctamente", {
                icon: "success"
            });
            location.href = "BicicletaControl.php?accion=eliminar&idBicicleta=" + idBicicleta;
        } else {
            Swal.fire("El archivo no se eliminará");
        }
    });
}

function EditarRepuesto(idRepuesto) {
    location.href = "RepuestoControl.php?accion=editar&idRepuesto=" + idRepuesto;
}

function EliminarRepuesto(idRepuesto) {
    Swal.fire({
        tittle: "¿Está seguro que desea eliminar este repuesto?",
        text: "Si elimina, no se podrá recuperar",
        icon: "error",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            Swal.fire("Archivo Eliminado Correctamente", {
                icon: "success"
            });
            location.href = "RepuestoControl.php?accion=eliminar&idRepuesto=" + idRepuesto;
        } else {
            Swal.fire("El archivo no se eliminará");
        }
    });
}

function EditarUsuario(idUsuario) {
    location.href = "UsuariosControl.php?accion=editar&idUsuario=" + idUsuario;
}

function EliminarUsuario(idUsuario) {
    Swal.fire({
        title: "¿Está seguro que desea eliminar este usuario?",
        text: "Si elimina, no se puedrá recuperar",
        icon: "error",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            Swal.fire("Archivo Eliminado Correctamente", {
                icon: "success"
            });
            location.href = "UsuariosControl.php?accion=eliminar&idUsuario=" + idUsuario;
        } else {
            Swal.fire("el archivo no se eliminará");
        }
    });
}

function EditarMantenimiento(idMantenimiento) {
    location.href = "MantenimientoControl.php?accion=editar&idMantenimiento=" + idMantenimiento;
}

function IngresarMantenimiento(idBicicleta) {
    Swal.fire({
        title: "Se ingresará a mantenimiento a la bicicleta con id " + idBicicleta,
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire("Bicicleta en mantenimiento", {
                icon: "success"
            });
            location.href = "MantenimientoControl.php?accion=ingmantenimiento&idBicicleta=" + idBicicleta;
        }
    })
}

function PonerFuncionamiento(idBicicleta) {
    Swal.fire({
        title: 'Bicicicleta con id ' + idBicicleta + ' se pondrá en funcionamiento',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        location.href = "MantenimientoControl.php?accion=funcionamiento&idBicicleta=" + idBicicleta;
        if (result.isConfirmed) {
            Swal.fire(
                    'Aceptado',
                    'Bicicleta en funcionamiento',
                    'success'

                    )
            //location.href = "MantenimientoControl.php?accion=funcionamiento&idBicicleta=" + idBicicleta;
        }
    })
}

function Alquilar(idBicicleta) {
    Swal.fire({
        title: 'Bicicicleta con id ' + idBicicleta + ' será alquilada',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        location.href = "AlquilerControl.php?accion=alquilar&idBicicleta=" + idBicicleta;
        if (result.isConfirmed) {
            Swal.fire(
                    'Aceptado',
                    'Bicicleta en alquiler',
                    'success'

                    )
            //location.href = "MantenimientoControl.php?accion=funcionamiento&idBicicleta=" + idBicicleta;
        }
    })
}

function Devuelto(idBicicleta) {
    Swal.fire({
        title: 'Bicicicleta con id ' + idBicicleta + ' es devuelta',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        location.href = "AlquilerControl.php?accion=devolver&idBicicleta=" + idBicicleta;
        if (result.isConfirmed) {
            Swal.fire(
                    'Aceptado',
                    'Bicicleta disponible',
                    'success'

                    )
            //location.href = "MantenimientoControl.php?accion=funcionamiento&idBicicleta=" + idBicicleta;
        }
    })
}

function Confirmacion() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 100,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    Toast.fire({
        icon: 'success',
        title: 'Se guardó el cambio de los datos'
    });
}

function Confirmacion2() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 100,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Registro exitoso'
    })
}


function ReporteDisponibilidad() {
    location.href = "AlquilerControl.php?accion=imprimir";
}