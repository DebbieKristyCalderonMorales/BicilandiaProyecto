CREATE TABLE bicicleta (
    idBicicleta int(11) AUTO_INCREMENT,
    codigo varchar(55) NOT NULL,
    color varchar(55) NOT NULL,
    marca varchar(55) NOT NULL,
    estado INT,
    PRIMARY KEY (idBicicleta)
);

CREATE TABLE tipousuario ( 
    idTipoUsuario INT(11) AUTO_INCREMENT, 
    rolUsuario varchar(30) NOT NULL, 
    PRIMARY KEY (idTipoUsuario)
);


CREATE TABLE repuesto ( 
    idRepuesto INT(11) AUTO_INCREMENT, 
    nombre varchar(30) NOT NULL,
    stock INT(11) NOT NULL,
    precio double NOT NULL, 
    PRIMARY KEY (idRepuesto)
);

CREATE TABLE usuario (
    idUsuario INT(11) AUTO_INCREMENT,
    dni varchar(8) NOT NULL,
    nombres varchar(120) NOT NULL,
    apellidos varchar(120) NOT NULL,
    direccion varchar(200) NOT NULL,
    telefono varchar(10) NOT NULL,
    correo varchar(100) NOT NULL,
    usuario varchar(120) NOT NULL,
    pass varchar(255) NOT NULL,
    estado INT NOT NULL,
    idTipoUsuario INT(11),
    PRIMARY KEY (idUsuario),
    FOREIGN KEY (idTipoUsuario) REFERENCES tipousuario(idTipoUsuario)
);

CREATE TABLE mantenimiento ( 
    idMantenimiento INT(11) AUTO_INCREMENT, 
    descripcion varchar(500) NOT NULL,
    idRepuesto INT(11) NOT NULL,
    idBicicleta INT(11) NOT NULL,
    idUsuario INT(11) NOT NULL,
    PRIMARY KEY (idMantenimiento),
    FOREIGN KEY (idRepuesto) REFERENCES repuesto(idRepuesto),
    FOREIGN KEY (idBicicleta) REFERENCES bicicleta(idBicicleta),
    FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);


CREATE TABLE alquiler ( 
    idAlquiler INT(11) AUTO_INCREMENT, 
    fecha date NOT NULL,
    horaSalida varchar(45) NOT NULL,
    horaEntrada varchar(45) NULL,
    cliente varchar(50) NOT NULL,
    estado INT(11) NOT NULL,
    idBicicleta INT(11) NOT NULL,
    idUsuario INT(11) NOT NULL,
    PRIMARY KEY (idAlquiler),
    FOREIGN KEY (idBicicleta) REFERENCES bicicleta(idBicicleta),
    FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);