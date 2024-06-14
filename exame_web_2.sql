
CREATE DATABASE IF NOT EXISTS exame_web_2;


USE exame_web_2;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(110) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    texto VARCHAR(255) NOT NULL
);


INSERT INTO usuarios (nome, email, telefone, texto) 
VALUES ('Nilton', 'nilton@gmail.com', '123456789', 'Ola Lexi & JurisPro');


SELECT * FROM usuarios;

-- Atualizar os detalhes de um usuário
UPDATE usuarios SET nome = 'Afonso' WHERE id = 1;

-- Deletar um usuário
DELETE FROM usuarios WHERE id = 2;