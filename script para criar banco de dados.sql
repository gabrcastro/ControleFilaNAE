CREATE DATABASE db_nae;

USE db_nae;

-- Criando a tabela dos funcionarios
CREATE TABLE tb_nae(
    id_func INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_func VARCHAR(50),
    user_func VARCHAR(50),
    passwd_func VARCHAR(20)
);

-- Criando a tabela de senhas
CREATE TABLE tb_senha(
    id_senha INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_user VARCHAR(50),
    setor_func VARCHAR(20),
    prioridade VARCHAR(20),
    atendido INT
);