CREATE DATABASE Juego;

USE Juego;

CREATE TABLE usuarios (
	Id_usuarios INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(20) NOT NULL,
    Email VARCHAR(20) NOT NULL, 
    Pass VARCHAR(100) NOT NULL,
    Foto VARCHAR(100),
    PRIMARY KEY (Id_usuarios)
    );

ALTER TABLE usuarios DROP COLUMN Pass;

ALTER TABLE usuarios
 ADD Pass VARCHAR(100) NOT NULL;
 ALTER TABLE usuarios
 ADD Pass VARCHAR(100);

CREATE TABLE partida (
	Id_partida INT NOT NULL AUTO_INCREMENT,
    Puntaje_total INT,
    Id_usuario INT NOT NULL,
    PRIMARY KEY (Id_partida),
    FOREIGN KEY (Id_usuario) REFERENCES usuarios(Id_usuarios)
    );

CREATE TABLE niveles (
	Id_nivel INT NOT NULL AUTO_INCREMENT,
    Aciertos INT,
    Numero INT,
    Tiempo INT NOT NULL,
    Puntaje INT,
    Id_partida INT NOT NULL, 
    PRIMARY KEY (Id_nivel),
    FOREIGN KEY (Id_partida) REFERENCES partida(Id_partida)
    );

CREATE TABLE preguntas (
	Id_pregunta INT NOT NULL AUTO_INCREMENT,
    Texto TEXT,
    Valor BOOLEAN,
    Id_nivel INT,
    Id_categoria INT,
    PRIMARY KEY (Id_pregunta),
    FOREIGN KEY (Id_nivel) REFERENCES niveles(Id_nivel),
    FOREIGN KEY (Id_categoria) REFERENCES categorias(Id_categoria)
    );

CREATE TABLE categorias (
	Id_categoria INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(20),
    PRIMARY KEY (Id_categoria)
    );
describe usuarios;
select * from usuarios;
INSERT into usuarios (Id_usuarios, Nombre, Email, Pass) VALUES (0, 'admin', 'admin@gmail.com', '$2y$10$u5kc71Kr7ll2Bg8oax7AQebEA.B3NUJmhgSgFENNezJGlez3x6UK6');
DELETE FROM usuarios
where id_Usuarios<5;
