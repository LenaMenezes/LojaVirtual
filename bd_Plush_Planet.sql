--drop database db_Plush_Planet;

CREATE DATABASE db_Plush_Planet

DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

use db_Plush_Planet;

-- Criação da tabela "Coleções"
CREATE TABLE tbl_colecoes(
    id_colecao int primary key auto_increment,
    nome_colecao varchar(60) not null,
    descricao varchar(100)
);

select * from tbl_colecoes;

 insert into tbl_colecoes values
    (default,'Harry Potter', 'Ursos inspirados no universo de Harry Potter'),
    (default,'Minecraft', 'Ursos inspirados no game Minecraft ' ),
    (default,'Pokemon', 'Ursos inspirados no universo de Pokemon'),
    (default,'Marvel', 'Ursos inspirados na Marvel Comics'),
    (default,'Disney', 'Ursos com personagens da Disney	'),
    (default,'cartoon network', 'Ursos com personagens do universo cartoon network'),
    (default,'Gravity Falls', 'Ursos com personagens do universo de Gravity Falls'),
    (default,'Animes Geral', 'Variações de ursos de diversos universos de animes');

-- Criação da tabela "Ursos de Pelúcia"
CREATE TABLE tbl_urso_pelucia(
    id_urso int primary key auto_increment ,
    nome_urso VARCHAR(60) not null,
    descricao varchar(100),
    preco decimal(6, 2) not null,
    quantidade_estoque int NOT NULL,
    img_urso varchar (255) not null,
    lancamento char(1),
    id_colecao INT,
    FOREIGN KEY (id_colecao) REFERENCES tbl_colecoes(id_colecao)
);

select * from tbl_urso_pelucia;
select * from tbl_colecoes;
insert into tbl_urso_pelucia values
	(default, 'Pelucia Draco Malfoy original','Icônico antagonista dos filmes de Harry Potter, Draco Malfoy, o mais amado entre os fãs.', 149.99, 59, 'img_draco','s', 1),
    (default, 'Pelucia Harry Potter original','Esta pelúcia traz à vida o icônico protagonista da amada série de livros e filmes de Harry Potter.', 149.99, 59, 'img_harry','s', 1),
    (default, 'Pelúcia Hermione Granger original', 'Uma adorável pelúcia da inteligente e corajosa Hermione Granger.', 129.99, 29, 'img_hermione','s', 1),
    (default, 'Pelúcia Ron Weasley original', 'Um boneco de pelúcia do fiel amigo Ron Weasley.', 129.99, 23, 'img_ron','s', 1),
    (default, 'Pelúcia Albus Dumbledore original', 'Um boneco de pelúcia do lendário diretor de Hogwarts.', 159.99, 0, 'img_dumbledore','n', 1),
    (default, 'Pelúcia Dobby original', 'Uma pelúcia do carismático elfo doméstico Dobby.', 99.99, 10, 'img_dobby','n', 1),
    (default, 'Pelúcia Hagrid original', 'Um boneco de pelúcia do amigável Guardião das Chaves de Hogwarts, Hagrid.', 149.99, 150, 'img_hagrid','n', 1),
    (default, 'Pelúcia Minerva McGonagall original', 'Uma pelúcia da enigmática Professora Minerva McGonagall .', 139.99, 1, 'img_minerva','n', 1);


insert into tbl_urso_pelucia values
	(default, 'Pelúcia Homem de Ferro original', 'Este boneco de pelúcia do enigmático Homem de Ferro.', 149.99, 245, 'img_homem_ferro','s', 4),
    (default, 'Pelúcia Capitão América original', 'Uma pelúcia do patriota super soldado, Capitão América.', 139.99, 55, 'img_capitao_america','n', 4),
    (default, 'Pelúcia Thor original', 'Um boneco de pelúcia do poderoso Deus do Trovão, Thor.', 149.99, 15, 'img_thor','n', 4),
    (default, 'Pelúcia Hulk original', 'Uma adorável pelúcia do gigante verde, o Hulk.', 159.99, 0, 'img_hulk','n', 4),
    (default, 'Pelúcia Viúva Negra original', 'Uma pelúcia da espiã habilidosa, Viúva Negra.', 139.99, 4,  'img_viuvanegra','s', 4),
    (default, 'Pelúcia Homem-Aranha original', 'Um boneco de pelúcia do amigável bairro Homem-Aranha.', 129.99, 187, 'img_homemaranha','s', 4),
    (default, 'Pelúcia Pantera Negra original', 'Uma pelúcia do rei de Wakanda, o Pantera Negra.', 149.99, 10, 'img_panteranegra','s', 4),
    (default, 'Pelúcia Doutor Estranho original', 'Um boneco de pelúcia do Mago Supremo, Doutor Estranho.', 139.99, 2, 'img_doutorestranho','s', 4),
    (default, 'Pelúcia Groot original', 'Uma adorável pelúcia da árvore falante, Groot.', 129.99, 10, 'img_groot','n', 4),
    (default, 'Pelúcia Rocket Raccoon original', 'Uma pelúcia do guaxinim engenheiro, Rocket Raccoon.', 139.99, 0, 'img_rocketraccoon','n', 4);

create view vw_pelucia
AS SELECT
    up.nome_urso,
    up.descricao,
    up.preco,
    up.quantidade_estoque,
    up.img_urso,
    up.lancamento,
    c.nome_colecao
FROM tbl_urso_pelucia AS up
INNER JOIN tbl_colecoes AS c ON up.id_colecao = c.id_colecao; 

select * from vw_pelucia;

-- drop view vw_pelucia
select nome_urso,preco,img_urso,quantidade_estoque from vw_pelucia where lancamento = 's';

-- insert da pelucias de minecraft com procedure

Delimiter $$
Create Procedure spInserttbl_urso_pelucia (vid_urso int, vnome_urso varchar(60), vdescricao varchar(100), vpreco decimal(6,2), vquantidade_estoque int, vimg_urso varchar(255), vlancamento char(1), vid_colecao int)
begin
INSERT INTO tbl_urso_pelucia (id_urso, nome_urso,descricao,preco, quantidade_estoque, img_urso, lancamento, id_colecao)
		VALUES(vid_urso, vnome_urso, vdescricao, vpreco, vquantidade_estoque, vimg_urso, vlancamento, vid_colecao);
end $$

call spInserttbl_urso_pelucia(null,'Minecraft Zumbi Explorador Pelúcia Em Chamas', 'Zumbi do Minecraft: Olhos vazios, pele esverdeada, fome eterna.', 99.98, 27,'img_zumbi', 'n', 2);
call spInserttbl_urso_pelucia(null,'Pelúcia Minecraft Panda','Panda adorável, preto e branco, no Minecraft.',120.00, 77, 'img_panda', 's', 2);
call spInserttbl_urso_pelucia(null,'Pelúcia Esqueleto Minecraft', 'Esqueleto misterioso do minecraft', 85.99, 10,'img_esqueleto','s', 2);
call spInserttbl_urso_pelucia(null,'Pelúcia Minecraft Explorador Creeper', 'Monstro noturno, olhos brilhantes, silencioso e sinistro.'. 149.98, 5, 'img_creeper','s',2);
call spInserttbl_urso_pelucia(null,'Minecraft Happy Explorer Sela Porco Pelúcia', 'Porco rosa que fornece comida em Minecraft.'230.00, 0, 'img_porco','s',2);
call spInserttbl_urso_pelucia(null,'Pelúcia Ovelha Negra Minecraft','Ovelha negra: Rebelde no mundo dos blocos.',150.00,0, 'img_ovelha_negra', 's',2);

-- insert das pelucias da disney com procedure

call spInserttbl_urso_pelucia(null,'Pelúcia Lilo Stitch','Stitch: O alienígena travesso da Disney!',120.00,88,'img_stitch','n',5);
call spInserttbl_urso_pelucia(null,'Pelúcia Mickey Disney Com Som Multikids','O Mickey é o ratinho mais amado da Disney!',55.99,55, 'img_mickey','n',5);
call spInserttbl_urso_pelucia(null,'Pelúcia Minnie Disney C/ Som ','Minnie, a adorável ratinha da Disney, esbanja charme e alegria!',89.99,1, 'img_minnie','n',5);
call spInserttbl_urso_pelucia(null,'Pumba Pelúcia Timão E Pumbaa Disney', 'Leal amigo de Simba e Timão.', 98.99,48,'img_pumbaa','s',5);

-- inserte das pelucias da cartoon com procedure
call spInserttbl_urso_pelucia(null,'Pelúcia Darwin - O Incrível Mundo De Gumball','Darwin, o peixe transformado, amigo fiel e hilário de Gumball.',99.90,99,'img_darwin','s',6);
call spInserttbl_urso_pelucia(null, 'Pelúcia Gumball - O Incrível Mundo De Gumball','Gumball Watterson, o gato azul, encara aventuras hilárias com sua família em Elmore.',99.90,0,'img_gumball','n',6);
call spInserttbl_urso_pelucia(null, 'Coleção Urso Sem Curso Pelúcia','Urso Sem Curso: Pelúcia fofa para abraçar e colecionar!', 219.99,98,'img_ursos_cursos','s',6)

-- inssert de animes no geral