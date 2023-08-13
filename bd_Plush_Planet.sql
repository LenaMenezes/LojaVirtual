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
select * from tb_Marcas;
select * from tb_Produtos;

































-- Prof não pediu
CREATE TABLE Clientes (
    id_cliente INT PRIMARY KEY,
    nome VARCHAR(70) NOT NULL,
    email VARCHAR(70) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    pais VARCHAR(50) NOT NULL,
    telefone VARCHAR(13) NOT NULL
)
default charset utf8;

-- Criação da tabela "Pedidos"
CREATE TABLE Pedidos (
    id_pedido INT PRIMARY KEY,
    id_cliente INT NOT NULL,
    data_pedido DATE NOT NULL,
    status VARCHAR(50) NOT NULL,
    valor_total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
)
default charset utf8;


-- Criação da tabela "Itens_do_Pedido"
CREATE TABLE Itens_do_Pedido (
    id_item INT PRIMARY KEY,
    id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES Pedidos(id_pedido),
    FOREIGN KEY (id_produto) REFERENCES Produtos(id_produto)
)
default charset utf8;



DROP database db_Plush_Planet;