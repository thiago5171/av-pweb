
CREATE DATABASE pweb;
CREATE TABLE usuarios(
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        nome varchar(200),
                        cpf varchar(11) unique ,
                        senha varchar(100)

);

