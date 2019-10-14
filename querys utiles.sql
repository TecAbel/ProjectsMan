select * from proyectos;
select * from avances;
select * from usuarios;
select * from proyectos
inner join avances
on proyectos.num_proyecto = avances.num_proyecto;

SELECT num_avance FROM avances WHERE num_avance = (SELECT max(num_avance) FROM avances);
#nombre de proyecto, estado y último proyecto
SELECT proyectos.num_proyecto, proyectos.nombre_proyecto, proyectos.estado,max(avances.num_avance) as ultimo_avance
from proyectos inner join avances ON proyectos.num_proyecto = avances.num_proyecto
group by nombre_proyecto
order by nombre_proyecto asc;

# es lo mismo 
SELECT * from peticion_proyectos;

#nombre detalle 
select nombre_detalle FROM avances where num_avance = 2;

#el último avance de cada proyecto
SELECT max(num_avance) FROM avances group by num_proyecto;



SELECT * FROM avances;

SELECT * FROM ultimoProyecto;

INSERT INTO usuarios(correo,nombre_user,pase) VALUES ('correo','nombre','pas');

SELECT pase FROM usuarios WHERE correo = 'abelardo@mail.com';


INSERT INTO proyectos(nombre_proyecto) VALUES ('neuvo proyecto');

SELECT num_usuario FROM usuarios WHERE correo = 'abelardo@mail.com';



##### AVANCES ######

#Insertar avance DESPUES DE UN INSERT EN PROYECTOS
INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle, detalle_avance)
VALUES ((SELECT * FROM ultimoproyecto),(SELECT num_usuario FROM usuarios WHERE correo = 'abelardo@mail.com'), '2019-10-04', 'Inicio de proyecto', 'Se creó proyecto');

#INSERTAR UN AVANCE
INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle,detalle_avance)
VALUES (num_proyecto,num_usuario,fecha,nombre_detalle,detalle_avance);

#obtener avances de todos los proyectos agrupados por proyectos

SELECT fecha, nombre_detalle, detalle_avance
FROM avances;
#obtener avances de proyecto especifico

SELECT nombre_detalle, date_format(fecha,'%d/%m/%y') as fecha, detalle_avance
FROM avances
WHERE num_proyecto = '1';