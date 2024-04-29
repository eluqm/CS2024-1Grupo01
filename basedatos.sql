CREATE DATABASE LIMPERU;
USE LIMPERU;

CREATE TABLE administrador(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(250),
  apellido VARCHAR(250),
  correo VARCHAR(250),
  usuario VARCHAR(250),
  clave VARCHAR(250)
);

CREATE TABLE labor(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  fecha VARCHAR(250),
  titulo VARCHAR(250),
  descripcion VARCHAR(250),
  fkzona INT(11),
  fkadministrador INT(11)
);

CREATE TABLE zona(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  zona VARCHAR(250),
  marcacion VARCHAR(250)
);

ALTER TABLE labor
ADD CONSTRAINT FKzona2
FOREIGN KEY (fkzona) REFERENCES zona(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE labor
ADD CONSTRAINT FKadministrador2
FOREIGN KEY (fkadministrador) REFERENCES administrador(id) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE operario(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  foto VARCHAR(250),
  identificacion VARCHAR(250),
  nombre VARCHAR(250),
  apellido VARCHAR(250),
  correo VARCHAR(250),
  telefono VARCHAR(250),
  usuario VARCHAR(250),
  clave VARCHAR(250)
);

CREATE TABLE estado(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  estado VARCHAR(250)
);

CREATE TABLE reporte(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  foto VARCHAR(260),
  fecha VARCHAR(260),
  longitud VARCHAR(260),
  latitud VARCHAR(260),
  informe VARCHAR(260),
  fkestado INT(11),
  fklabor INT(11),
  fkoperario INT(11)
);

ALTER TABLE reporte
ADD CONSTRAINT FKestado1
FOREIGN KEY (fkestado) REFERENCES estado(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE reporte
ADD CONSTRAINT FKlabor1
FOREIGN KEY (fklabor) REFERENCES labor(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE reporte
ADD CONSTRAINT FKoperario1
FOREIGN KEY (fkoperario) REFERENCES operario(id) ON DELETE CASCADE ON UPDATE CASCADE;
