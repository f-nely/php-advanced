create database php_advanced with owner=postgres encoding='UTF8';

CREATE TABLE produtos (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  valor DECIMAL(11,2) NOT NULL,
  qtd_estoque INTEGER NOT NULL,
  categoria_id INTEGER NOT NULL
);

CREATE TABLE categorias
(
  id SERIAL PRIMARY KEY,
  categoria VARCHAR(100) NOT NULL
);

INSERT INTO produtos
(nome, valor, qtd_estoque, categoria_id)
VALUES
('Tenis', 200.00, 4, 2),
('Sapato', 100.00, 3, 1),
('Bone', 45.00, 6, 5),
('Camiseta', 80.00, 6, 5),
('Camisa', 240.00, 7, 8),
('Meia', 15.00, 9, 3);

INSERT INTO categorias
(categoria)
VALUES
('Social'),
('Nike'),
('Escolar'),
('Couro'),
('Times'),
('Addidas'),
('Basebal'),
('Polo');