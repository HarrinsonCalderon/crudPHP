CREATE DATABASE tareas;
USE tareas;

CREATE TABLE tareas(
id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(100),
descripcion VARCHAR(255)
);
INSERT INTO tareas values(NULL,"tarea 1","descripcion tarea 1");
INSERT INTO tareas values(NULL,"tarea 2","descripcion tarea 2");
INSERT INTO tareas values(NULL,"tarea 3","descripcion tarea 3");
INSERT INTO tareas values(NULL,"tarea 4","descripcion tarea 4");

SELECT * FROM tareas ;