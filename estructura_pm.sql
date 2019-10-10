#se crea la base de datos
CREATE DATABASE projectsman CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';
create USER 'pm_god'@'localhost' IDENTIFIED BY 'God_P*7';
GRANT SELECT, DELETE, UPDATE, CREATE, INSERT ON projectsman.* TO 'pm_god'@'localhost';
USE projectsman;


CREATE TABLE usuarios (
	num_usuario int(8) NOT NULL UNIQUE auto_increment,
    PRIMARY KEY (num_usuario),
    correo CHAR(40) NOT NULL UNIQUE,
    nombre_user char(40) not null,
    pase char(100) not null
)CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

CREATE TABLE proyectos(
	num_proyecto int(10) NOT NULL UNIQUE AUTO_INCREMENT,
    primary key (num_proyecto),
    nombre_proyecto char(30) NOT NULL UNIQUE,
    estado boolean not null default 1
)CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

CREATE TABLE avances(
	num_avance INT(12) NOT NULL UNIQUE AUTO_INCREMENT,
    primary key (num_avance),
    num_proyecto int(10) NOT NULL,
    foreign key(num_proyecto) references proyectos(num_proyecto),
    num_usuario int(8) NOT NULL,
    foreign key(num_usuario) references usuarios(num_usuario),
    fecha date,
    nombre_detalle char(30) not null,
    detalle_avance varchar(400),
    nota varchar(100)
)CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

# ultimo proyecto registrado
CREATE OR REPLACE VIEW ultimoProyecto as 
SELECT max(num_proyecto) as ultimo FROM proyectos; 

#ultimo avance
create or replace view ultimoavance as
SELECT num_avance FROM avances WHERE num_avance = (SELECT max(num_avance) FROM avances);

#ultimo avance, proyectos y estado de cada uno 
CREATE OR REPLACE VIEW peticion_proyectos as
SELECT proyectos.num_proyecto, proyectos.nombre_proyecto, proyectos.estado,max(avances.num_avance) as ultimo_avance
from proyectos inner join avances ON proyectos.num_proyecto = avances.num_proyecto
group by nombre_proyecto
order by nombre_proyecto asc;