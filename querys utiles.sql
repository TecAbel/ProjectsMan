select * from proyectos
inner join avances
on proyectos.num_proyecto = avances.num_proyecto;

SELECT num_avance FROM avances WHERE num_avance = (SELECT max(num_avance) FROM avances);
#nombre de proyecto, estado y último proyecto
SELECT proyectos.nombre_proyecto, proyectos.estado, avances.nombre_detalle as ultimo_avance
from proyectos inner join avances ON proyectos.num_proyecto = avances.num_proyecto
WHERE nombre_proyecto = 'Pruebas' AND num_avance=(SELECT num_avance FROM avances WHERE num_avance = (SELECT max(num_avance) FROM avances));
SELECT * FROM avances;

SELECT * FROM ultimoProyecto;

INSERT INTO usuarios(correo,nombre_user,pase) VALUES ('correo','nombre','pas');

SELECT pase FROM usuarios WHERE correo = 'abelardo@mail.com';


INSERT INTO proyectos(nombre_proyecto) VALUES ('neuvo proyecto');

SELECT num_usuario FROM usuarios WHERE correo = 'abelardo@mail.com';

INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle)
VALUES ((SELECT * FROM ultimoproyecto),(SELECT num_usuario FROM usuarios WHERE correo = '$correo'), '2019-10-04', 'Se creó proyecto');

INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle)
VALUES ('1','1','2019-10-04','prueba 2');