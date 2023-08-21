CREATE DATABASE db_Plush_Planet

DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

use db_Plush_Planet;

-- Criação da tabela "Marcas"
CREATE TABLE tb_Marcas(
    id_marca INT PRIMARY KEY auto_increment,
    nome_marca VARCHAR(100) NOT NULL
);

-- Criação da tabela "Produtos"
CREATE TABLE tb_Produtos(
    id_produto INT PRIMARY KEY auto_increment,
    nome_produto VARCHAR(60) NOT NULL,
    descricao VARCHAR(100),
    preco DECIMAL(7, 2) NOT NULL,
    Produto_disponivel varchar(3),
    id_marca INT NOT NULL,
    FOREIGN KEY (id_marca) REFERENCES tb_Marcas(id_marca)
);



INSERT INTO tb_Marcas (id_marca, nome_marca) VALUES
(default, 'Harry Potter'),
(default, 'Disney'),
(default, 'Minecraft'),
(default, 'Pokémon'),
(default, 'Hora de Aventura'),
(default, 'Gravity Falls'),
(default, 'Animes Gerais');

DELETE FROM tb_Marcas WHERE id_marca = 1; 


INSERT INTO tb_Produtos (id_produto, nome_produto, descricao, preco, Produto_disponivel, id_marca) VALUES
(default, 'Disney Pelúcia Big Feet Sulley', 'Altura x Largura: 32 cm x 25 cm, Material do enchimento: Fibra siliconada, Peso: 250 g', 144.99, 'sim', 2),
(default, 'Ursinho Pelúcia Boneco Disney Mike', 'Altura x Largura: 30 cm x 20 cm, Material do enchimento: Poliéster, Peso: 0.155 g' , 119.99, 'sim', 2 ),
(default, 'Disney Pelucia Da Boo', 'Altura x Largura: 25 cm x 20 cm, Material do enchimento: Poliéster, Peso: 320 g', 166.49, 'sim', 2 ),
(default, 'Pelúcia Original Disney STITCH', 'Altura x Largura: 31.2 cm x 26.5 cm, Material do enchimento: Poliéster, Peso: 400 g', 153.99, 'sim', 2 ),
(default, 'Pelúcia Gato Cheshire Disney', 'Altura x Largura: 40 cm x 30 cm, Material do enchimento: Poliéster, Peso: 317 g', 319.90, 'sim', 2 ),
(default, 'Disney Pelúcia Rei Leão Pumba', 'Altura x Largura: 30 cm x 22 cm, Material do enchimento: Poliéster, Peso: 100 g',  209.99, 'sim', 2 ),
(default, 'Pua Porco Pelúcia Porquinho Moana Disney', 'Altura x Largura: 30 cm x 25 cm, Material do enchimento: Poliéster, Peso: 150 g', 69.99, 'sim', 2 )
;



