--
drop database db_Plush_Planet;

CREATE DATABASE db_Plush_Planet

DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

use db_Plush_Planet;

-- Criação da tabela "Coleções"
CREATE TABLE tbl_colecoes(
    id_colecao int primary key auto_increment,
    nome_colecao varchar(60) not null,
    descricao varchar(100),
    data_lancamento date 
);

select * from tbl_colecoes;

 insert into tbl_colecoes values
    (default,'Harry Potter', 'Ursos inspirados no universo de Harry Potter', '2023-01-01'),
    (default,'Minecraft', 'Ursos inspirados no game Minecraft ', '2022-02-01' ),
    (default,'Pokemon', 'Ursos inspirados no universo de Pokemon', '2022-02-15'),
    (default,'Marvel', 'Ursos inspirados na Marvel Comics', '2022-03-01'),
    (default,'Disney', 'Ursos com personagens da Disney	', '2021-05-05'),
    (default,'cartoon network', 'Ursos com personagens do universo cartoon network', '2020-07-10'),
    (default,'Gravity Falls', 'Ursos com personagens do universo de Gravity Falls', '2020-09-25'),
    (default,'Animes Geral', 'Variações de ursos de diversos universos de animes', '2019-01-01');

-- Criação da tabela "Ursos de Pelúcia"
CREATE TABLE tbl_urso_pelucia(
    id_urso int primary key auto_increment ,
    nome_urso VARCHAR(60) not null,
    descricao varchar(100),
    preco decimal(6, 2) not null,
    quantidade_estoque int NOT NULL,
    img_urso varchar (255) not null,
    id_colecao INT,
    FOREIGN KEY (id_colecao) REFERENCES tbl_colecoes(id_colecao)
);
select * from tbl_urso_pelucia;
select * from tbl_colecoes;
insert into tbl_urso_pelucia values
	(default, 'Pelucia Draco Malfoy original','Icônico antagonista dos filmes de Harry Potter, Draco Malfoy, o mais amado entre os fãs.', 149.99, 59, 'img_draco', 1),
    (default, 'Pelucia Harry Potter original','Esta pelúcia traz à vida o icônico protagonista da amada série de livros e filmes de Harry Potter.', 149.99, 59, 'img_harry', 1),
    (default, 'Pelúcia Hermione Granger original', 'Uma adorável pelúcia da inteligente e corajosa Hermione Granger.', 129.99, 29, 'img_hermione', 1),
    (default, 'Pelúcia Ron Weasley original', 'Um boneco de pelúcia do fiel amigo Ron Weasley.', 129.99, 23, 'img_ron', 1),
    (default, 'Pelúcia Albus Dumbledore original', 'Um boneco de pelúcia do lendário diretor de Hogwarts.', 159.99, 0, 'img_dumbledore', 1),
    (default, 'Pelúcia Dobby original', 'Uma pelúcia do carismático elfo doméstico Dobby.', 99.99, 10, 'img_dobby', 1),
    (default, 'Pelúcia Hagrid original', 'Um boneco de pelúcia do amigável Guardião das Chaves de Hogwarts, Hagrid.', 149.99, 150, 'img_hagrid', 1),
    (default, 'Pelúcia Minerva McGonagall original', 'Uma pelúcia da enigmática Professora Minerva McGonagall .', 139.99, 1, 'img_minerva', 1),
    (default, 'Pelúcia Bellatrix Lestrange original', 'Uma pelúcia da sinistra bruxa Bellatrix Lestrange.', 139.99, 85, 'img_bellatrix', 1),
	(default, 'Pelúcia Luna Lovegood original', 'Uma adorável pelúcia da excêntrica Luna Lovegood.', 139.99, 48, 'img_luna', 1);


insert into tbl_urso_pelucia values
	(default, 'Pelúcia Homem de Ferro original', 'Este boneco de pelúcia do enigmático Homem de Ferro.', 149.99, 245, 'img_homem_ferro', 4),
    (default, 'Pelúcia Capitão América original', 'Uma pelúcia do patriota super soldado, Capitão América.', 139.99, 55, 'img_capitao_america', 4),
    (default, 'Pelúcia Thor original', 'Um boneco de pelúcia do poderoso Deus do Trovão, Thor.', 149.99, 15, 'img_thor', 4),
    (default, 'Pelúcia Hulk original', 'Uma adorável pelúcia do gigante verde, o Hulk.', 159.99, 0, 'img_hulk', 4),
    (default, 'Pelúcia Viúva Negra original', 'Uma pelúcia da espiã habilidosa, Viúva Negra.', 139.99, 4,  'img_viuvanegra', 4),
    (default, 'Pelúcia Homem-Aranha original', 'Um boneco de pelúcia do amigável bairro Homem-Aranha.', 129.99, 187, 'img_homemaranha', 4),
    (default, 'Pelúcia Pantera Negra original', 'Uma pelúcia do rei de Wakanda, o Pantera Negra.', 149.99, 10, 'img_panteranegra', 4),
    (default, 'Pelúcia Doutor Estranho original', 'Um boneco de pelúcia do Mago Supremo, Doutor Estranho.', 139.99, 2, 'img_doutorestranho', 4),
    (default, 'Pelúcia Groot original', 'Uma adorável pelúcia da árvore falante, Groot.', 129.99, 10, 'img_groot', 4),
    (default, 'Pelúcia Rocket Raccoon original', 'Uma pelúcia do guaxinim engenheiro, Rocket Raccoon.', 139.99, 0, 'img_rocketraccoon', 4);

create view vw_pelucia
AS SELECT
    up.nome_urso,
    up.descricao,
    up.preco,
    up.quantidade_estoque,
    up.img_urso,
    c.nome_colecao
FROM tbl_urso_pelucia AS up
INNER JOIN tbl_colecoes AS c ON up.id_colecao = c.id_colecao; 

select * from vw_pelucia;
select * from tbl_urso_pelucia;
select * from tbl_colecoes;
