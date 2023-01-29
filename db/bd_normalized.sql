CREATE TABLE personas (
    id int NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    id_cargo INT,
    id_correo INT,
    id_telefono INT,
    id_cv INT,
    id_foto INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_cargo) REFERENCES cargos(id),
    FOREIGN KEY (id_correo) REFERENCES correos(id),
    FOREIGN KEY (id_telefono) REFERENCES telefonos(id),
    FOREIGN KEY (id_cv) REFERENCES cv(id),
    FOREIGN KEY (id_foto) REFERENCES fotos(id)
);

CREATE TABLE cargos (
    id int AUTO_INCREMENT,
    cargo VARCHAR(80),
    PRIMARY KEY (id)
);

CREATE TABLE correos (
    id int AUTO_INCREMENT,
    correo VARCHAR(70),
    PRIMARY KEY (id),
    UNIQUE (correo)
);

CREATE TABLE telefonos (
    id int AUTO_INCREMENT,
    telefono VARCHAR(40),
    PRIMARY KEY (id)
);

CREATE TABLE cv (
    id int AUTO_INCREMENT,
    cv VARCHAR(150),
    PRIMARY KEY (id)
);
CREATE TABLE fotos (
    id int AUTO_INCREMENT,
    foto VARCHAR(150),
    PRIMARY KEY (id)
);