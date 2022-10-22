<?php
/**
 * MySQL
 * 
 * CREATE TABLE `eventos`.`invitados` ( 
 * `id` INT(7) NOT NULL AUTO_INCREMENT , 
 * `nombre` VARCHAR(30) NOT NULL , 
 * `apellido` VARCHAR(50) NULL , 
 * `fecha` DATE NOT NULL , 
 * PRIMARY KEY (`id`)
 * ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
 * 
 * 
 * INSERT INTO `invitados` (`id`, `nombre`, `apellido`, `fecha`) 
 * VALUES (NULL, 'Dario', 'Quispe', '2022-10-17');
 * 
 * INSERT INTO invitados (nombre,apellido,fecha) 
 * VALUES('Minka','MK','2022/01/01');
 * 
 * 
 * SELECT  * FROM invitados
 * SELECT nombre FROM invitados
 * SELECT nombre, apellido FROM invitados
 * 
 * SELECT nombre FROM invitados WHERE nombre = 'Minka'
 * SELECT nombre, apellido FROM invitados WHERE nombre = 'Minka'
 * 
 * SELECT  * FROM invitados ORDER BY nombre --Se ordenara en orden alfabetico
 * 
 * 
 * UPDATE invitados SET nombre = 'Ruben' WHERE nombre = 'Dario'; --Debe existir una buena especificacion, recomendacion usar IDs
 * 
 * 
 * DELETE
 * Elimina una fila
 * DELETE FROM invitados; --sin especificar elimina todas las filas
 * DELETE FROM invitados WHERE id=2;
 * 
 * 
 * DROP TABLE
 * Eliminar una tabla
 * 
 * 
 * TRUNCATE TABLE 
 * Eliminar datos de una tabla
 * No afecta a asociaciones, trigers,etc.
 * TRUNCATE TABLE invitados;
 * 
 * 
 * PRIMARY KEY
 * Es un identificador de una tabla
 * Solo existe un primary key por tabla
 * 
 * CREATE TABLE `eventos`.`usuarios` ( 
 * `id` INT(11) NOT NULL , 
 * `nombre` VARCHAR(50) NOT NULL , 
 * `apellido` VARCHAR(50) NOT NULL , 
 * `password` VARCHAR(16) NOT NULL , 
 * PRIMARY KEY (`id`) -- <- Aqui definimos el primary key
 * ) ENGINE = InnoDB;
 * Si insertamos 2 filas que contengan el mismo valor del id, arrojará un error
 * INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `password`) 
 * VALUES 
 * ('3', 'Min', 'cat', 'cat'), 
 * ('3', 'Kasper', 'dog', 'dog');
 * 
 * 
 * FOREIGN KEY
 * Son llaves foraneas, nos permite relacionar tablas.
 * 
 * Creamos la tabla evento para hacer una relacion entre la tabla evento y usuarios a traves de otra tabla
 * CREATE TABLE `eventos`.`evento` ( 
 * `id` INT NOT NULL AUTO_INCREMENT , 
 * `nombre` VARCHAR(50) NOT NULL , 
 * PRIMARY KEY (`id`)
 * ) ENGINE = InnoDB;
 * 
 * 
 * creamos la tabla que tiene los foreign key para que se interconecten entre la tabla usuarios y evento
 * CREATE TABLE registros(
 * id INT NOT NULL PRIMARY KEY,
 * usuario_id INT NOT NULL,
 * evento_id INT NOT NULL,
 *    
 * FOREIGN KEY fk_usuario_id(usuario_id)
 * REFERENCES usuarios(id),
 *   
 * FOREIGN KEY fk_evento_id(evento_id)
 * REFERENCES evento(id)
 * );
 * 
 * INNER JOIN
 * son consultas donde podemos combinar dos tablas cuando existe una relacion con foreing key
 * 
 * SELECT * FROM registros
 * INNER JOIN usuarios
 * ON registros.usuario_id = usuarios.id;
 * 
 * SELECT * FROM registros
 * INNER JOIN usuarios
 * ON registros.usuario_id = usuarios.id
 * INNER JOIN evento
 * ON registros.evento_id = evento.id;
 * 
 * SELECT registros.id, usuarios.nombre, evento.nombre FROM registros
 * INNER JOIN usuarios
 * ON registros.usuario_id = usuarios.id
 * INNER JOIN evento
 * ON registros.evento_id = evento.id;
 */
?>