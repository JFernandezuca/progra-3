DROP DATABASE IF EXISTS UCA;
CREATE DATABASE UCA;
USE UCA;


/* Create table */
CREATE TABLE UCA_CARRERA (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUniversidad INT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT
);


/* Insert  */

INSERT INTO UCA_CARRERA (idUniversidad, nombre, descripcion) VALUES (1, 'Ingeniería Informática', 'Esta carrera se enfoca en el desarrollo de software y sistemas informáticos.');
INSERT INTO UCA_CARRERA (idUniversidad, nombre, descripcion) VALUES (2, 'Psicología', 'Estudia el comportamiento humano y los procesos mentales.'); 


/* SELECT ALL /obtiene todos los campos/ */
SELECT * FROM  uca_carrera;


/*Select, traer solo los campos especificados */
SELECT id, nombre FROM uca_carrera;

/* select like */
SELECT 
	*
FROM
	UCA_CARRERA
WHERE
	 COLUMNA LIKE "%comportamiento%";



/* USO DE WHERE*/
SELECT * 
FROM UCA_CARRERA 
WHERE id = 1;


/*Update */
UPDATE UCA_CARRERA
SET descripcion = 'Nueva descripción de la carrera'
WHERE id = 1;


/*DELETE  */
DELETE FROM UCA_CARRERA
WHERE id = 2;


