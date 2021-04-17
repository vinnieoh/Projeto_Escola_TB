CREATE TABLE aluno(
                      idAluno int NOT NULL,
                      fname varchar(100),
                      lname varchar(100),
                      cpf varchar(11),
                      email varchar(100),
                      senha varchar(100),
                      sexo varchar(10),
                      data_nascimento date,
                      primary key(idAluno)
);

CREATE TABLE endereco(
                         idEndereco int NOT NULL,
                         rua varchar(100),
                         bairro varchar(100),
                         cidade varchar(100),
                         estado char(2),
                         Id_Aluno int NOT NULL,
                         primary key(idEndereco),
                         Foreign key (ID_Aluno) references aluno(idAluno)
);

CREATE TABLE telefone_aluno(
                               idTelefoneAluno int NOT NULL,
                               dd char(2),
                               numero varchar(9),
                               tipo_telefone char(3),
                               Id_Aluno int NOT NULL,
                               primary key(idTelefoneAluno),
                               Foreign key (ID_Aluno) references aluno(idAluno)
);

CREATE TABLE professor(
                          idProfessor int NOT NULL,
                          fname varchar(100),
                          lname varchar(100),
                          formacao varchar(100),
                          email varchar(100),
                          senha varchar(100),
                          primary key(idProfessor)
);


CREATE TABLE turma(
                      idTurma int NOT NULL,
                      nome_turma varchar(100),
                      total_alunos int,
                      primary key(idTurma)
);


CREATE TABLE matricula(
                          idMatricula int NOT NULL,
                          data_matricula date,
                          Id_Aluno int NOT NULL,
                          Id_Turma int NOT NULL,
                          primary key(idMatricula),
                          Foreign key (ID_Aluno) references aluno(idAluno),
                          Foreign key (ID_Turma) references turma(idTurma)
);

CREATE TABLE telefone_professor(
                                   idTelefoneProfessor int NOT NULL,
                                   dd char(2),
                                   numero varchar(9),
                                   tipo_telefone char(3),
                                   Id_Professor int NOT NULL,
                                   primary key(idTelefoneProfessor),
                                   Foreign key (Id_Professor) references professor(idProfessor)
);

CREATE TABLE turma_professor(
                                idTurmaProfessor int NOT NULL,
                                Id_Turma int NOT NULL,
                                Id_Professor int NOT NULL,
                                data_inicio date,
                                Foreign key (Id_Turma) references turma(idTurma),
                                Foreign key (Id_Professor) references professor(idProfessor)
);

CREATE TABLE administracao(
                              idAdmin int NOT NULL,
                              fname varchar(100),
                              lname varchar(100),
                              email varchar(100),
                              senha varchar(100),
                              nivel char(1),
                              primary key(idAdmin)
);

CREATE TABLE boletim(
                        idBoletim int NOT NULL,
                        Id_Matricula int NOT NULL,
                        Id_Turma int NOT NULL,
                        primary key(idBoletim),
                        Foreign key (Id_Matricula) references matricula(idMatricula),
                        Foreign key (Id_Turma) references turma(idTurma)
);

CREATE TABLE notas(
                      idNota int NOT NULL,
                      trabalhos float,
                      avaliacao int NOT NULL,
                      materia varchar(50),
                      nota float,
                      Id_Boletim int NOT NULL,
                      Id_Professor int NOT NULL,
                      primary key(idNota),
                      Foreign key (Id_Boletim) references boletim(idBoletim),
                      Foreign key (Id_Professor) references professor(idProfessor)
);

/*Triggers



/*Inserçao tabela Aluno - 30 alunos*/

/* Turma - Primeiro Ano */
insert into aluno values (1, 'Benedita', 'Emanuelly Araújo', '80207423440', 'beneditaislyaraujo_@alunos.tb.com', 'yDPmHcp554', 'Masculino', '07/03/2003');
insert into endereco values(1, 'Passagem Bom Futuro', 'Itaiteua','Belém', 'PA', 1);
insert into telefone_aluno values(1, '91', '983741311', 'CEL', 1);

insert into aluno values( 2, 'Marli', 'Andreia Sarah da Luz', '64292606404', 'mmarliandreiasarahdaluz@alunos.tb.com', 'BUho0wkDco', 'Feminino', '18/04/2006');
insert into endereco values(2, 'Vila Vieira', 'Marco','Belém', 'PA', 2);
insert into telefone_aluno values(2, '91', '981989185', 'CEL', 2);

insert into aluno values( 3, 'José', 'Benedito Costa', '04403205429', 'josebeneditocosta@alunos.tb.com', '0HX2ky59F8', 'Masculino', '16/04/2005');
insert into endereco values(3, 'Rua União', 'Tenoné','Belém', 'PA', 3);
insert into telefone_aluno values(3, '91', '987319621', 'CEL', 3);

insert into aluno values( 4, 'Sebastião', 'Nelson da Rosa', '17581778452', 'sebastiaonelsondarosa@alunos.tb.com', 'jI7t6imFRZ', 'Masculino', '25/04/2004');
insert into endereco values(4, 'Rua Boaventura da Silva', 'Nazaré','Belém', 'PA', 4);
insert into telefone_aluno values(4, '91', '985042884', 'CEL', 4);

insert into aluno values( 5, 'Fernando', 'Henrique Ramos', '19169597413', 'fernandohenriqueramos@alunos.tb.com', 'Go6NkF0hqw', 'Masculino', '09/02/2003');
insert into endereco values(5, 'Quadra Sessenta e Quatro', 'Coqueiro','Belém', 'PA', 5);
insert into telefone_aluno values(5, '91', '995509210', 'CEL', 5);

/* Turma - Segundo Ano */

insert into aluno values( 6, 'Simone', 'Sueli da Silva', '46491583465', 'simonesuelidasilva@alunos.tb.com', 'KssmWKierX', 'Feminino', '24/05/2003');
insert into endereco values( 6, 'Quadra C', 'Maracacuera', 'Belém', 'PA', 6);
insert into telefone_aluno values(6, '91', '997445827', 'CEL', 6);

insert into aluno values( 7, 'Ryan', 'Giovanni Mendes', '69944392405', 'ryangiovannimendes_@alunos.tb.com', 'mgjkyMUQjz', 'Masculino', '10/04/2003');
insert into endereco values( 7, 'Vila Augusto Frederico', 'Condor', 'Belém', 'PA', 7);
insert into telefone_aluno values( 7, '91', '992412111', 'CEL', 7);

insert into aluno values( 8, 'Benício', 'Anderson Teixeira', '97612734400', 'beniciogaelandersonteixeira@alunos.tb.com', 'oNZn8BuNyG', 'Masculin', '18/09/2006');
insert into endereco values( 8, 'Passagem Monte Cristo', 'Parque Verde', 'Belém', 'PA', 8);
insert into telefone_aluno values( 8, '91', '992287183', 'CEL', 8);

insert into aluno values( 9, 'Benjamin', 'Severino Nune', '16144853480', 'benjaminseverinonunes-98@alunos.tb.com', 'A1QcTHBpQN', 'Masculino', '07/11/2005');
insert into endereco values( 9, 'Passagem Joana D arc', 'Guamá', 'Belém', 'PA', 9);
insert into telefone_aluno values(9, '91', '982541821', 'CEL', 9);

insert into aluno values( 10, 'Mariana', 'Laura Carla Duarte', '71196615403', 'mmarianalauracarladuarte@alunos.tb.com', 'ZSFLcNHGzP', 'Feminino', '17/09/2005');
insert into endereco values( 10, 'Avenida Presidente Vargas 498', 'Campina', 'Belém', 'PA', 10);
insert into telefone_aluno values( 10, '91', '998272921', 'CEL', 10);

/* Turma - Terceiro Ano */

insert into aluno values( 11, 'Paulo', 'Eduardo Rocha', '73156885444', 'paulocarloseduardorocha@alunos.tb.com', 'tP6S1xJc6I', 'Masculino', '12/05/2006');
insert into endereco values( 11, 'Rodovia Augusto Montenegro', 'Águas Negras', 'Belém', 'PA', 11);
insert into telefone_aluno values(11, '91', '993286098', 'CEL', 11);

insert into aluno values( 12, 'Camila', 'Isabelle da Mota', '46668538479', 'camilaisabelledamota@alunos.tb.com', 'lmtEPawH7H', 'Feminino', '27/06/2003');
insert into endereco values( 12, 'Vila Bom Jesus', 'Guamá', 'Belém', 'PA', 12);
insert into telefone_aluno values(12, '91', '993415908', 'CEL', 12);

insert into aluno values( 13, 'Débora', 'Alessandra Luciana Pinto', '28452502400', 'deboraalessandralucianapinto@alunos.tb.com', '9YaPN1ueaw', 'Feminino', '20/02/2003');
insert into endereco values( 13, 'Quadra Sessenta e Seis', 'Maracangalha', 'Belém', 'PA', 13);
insert into telefone_aluno values( 13, '91', '994126674', 'CEL', 13);

insert into aluno values( 14, 'Mário', 'Tomás Melo', '58975918491', 'marioedsontomasmelo@alunos.tb.com', 'DiNjZIQ9DX', 'Masculino', '23/11/2003');
insert into endereco values( 14, 'Alameda Ver-o-Sol', 'Ponta Gross', 'Belém', 'PA', 14);
insert into telefone_aluno values( 14, '91', '983850089', 'CEL', 14);

insert into aluno values( 15, 'Analu', 'Sarah Aparício', '48277888473', 'analusarahaparicio@alunos.tb.com', 'jZ1APFwA3m', 'Feminino', '23/07/2003');
insert into endereco values( 15, 'Vila Vicente de Carvalho', 'Condor', 'Belém', 'PA', 15);
insert into telefone_aluno values(15, '91', '981253928', 'CEL', 15);

/*Matricula Alunos*/
insert into matricula values(1, '01/01/2021', 1, 1);
insert into matricula values(2, '01/01/2021', 2, 1);
insert into matricula values(3, '01/01/2021', 3, 1);
insert into matricula values(4, '01/01/2021', 4, 1);
insert into matricula values(5, '01/01/2021', 5, 1);
insert into matricula values(6, '01/01/2021', 6, 2);
insert into matricula values(7, '01/01/2021', 7, 2);
insert into matricula values(8, '01/01/2021', 8, 2);
insert into matricula values(9, '01/01/2021', 9, 2);
insert into matricula values(10, '01/01/2021', 10, 2);
insert into matricula values(11, '01/01/2021', 11, 3);
insert into matricula values(12, '01/01/2021', 12, 3);
insert into matricula values(13, '01/01/2021', 13, 3);
insert into matricula values(14, '01/01/2021', 14, 3);
insert into matricula values(15, '01/01/2021', 15, 3);

/* Turma Aluno */
insert into turma values(1, 'Primerio Ano');
insert into turma values(2, 'Segundo Ano');
insert into turma values(3, 'Terceiro Ano');

/* Boletim */
insert into boletim values( 1, 1, 1);
insert into boletim values( 2, 2, 1);
insert into boletim values( 3, 3, 1);
insert into boletim values( 4, 4, 1);
insert into boletim values( 5, 5, 1);
insert into boletim values( 6, 6, 2);
insert into boletim values( 7, 7, 2);
insert into boletim values( 8, 8, 2);
insert into boletim values( 9, 9, 2);
insert into boletim values( 10, 10, 2);
insert into boletim values( 11, 11, 3);
insert into boletim values( 12, 12, 3);
insert into boletim values( 13, 13, 3);
insert into boletim values( 14, 14, 3);
insert into boletim values( 15, 15, 3);


/*Inserçao tabela Professor - 13 Professores*/
insert into professor values(1, 'Vera', 'Tereza Isabelle Barbosa', 'Matematica', 'veratereza@professor.tb.com', 'vera54321');
insert into telefone_professor values(1, '91', '992689678', 'CEL', 1);

insert into professor values(2, 'Yuri', 'Luís Novaes', 'Historia', 'yyuriluisnovaes@professor.tb.com', 'qwUhDXBIUK');
insert into telefone_professor values(2, '91', '982100545', 'CEL', 2);

insert into professor values(3, 'Ruan', 'Breno Porto', 'Portugues', 'ruanbrenoporto@professor.tb.com', 'pNeSZzEqPb');
insert into telefone_professor values(3, '91', '986662722', 'CEL', 3);

insert into professor values(4, 'Elaine', 'Flávia Sônia Pires', 'Ingles', 'elaineflaviasoniapires@professor.tb.com', 'xZgq3kNE4f');
insert into telefone_professor values(4, '91', '983093510', 'CEL', 4);

insert into professor values(5, 'Oliver', 'Victor Nunes', 'Artes', 'olivervictornunes@professor.tb.com', 'H64LAUzNyP');
insert into telefone_professor values(5, '91', '999210188', 'CEL', 5);

insert into professor values(6, 'Emily', 'Sophie Isabelle', 'Fisica', 'emilysophieisabelle@professor.tb.com', '3seENUh0MJ');
insert into telefone_professor values(6, '91', '994890886', 'CEL', 6);

insert into professor values(7, 'Kauê', 'Ryan Elias Barros', 'Geografia', 'kaueryaneliasbarros@professor.tb.com', 'E5QNuKPiKG');
insert into telefone_professor values(7, '91', '994312467', 'CEL', 7);

insert into professor values(8, 'Davi', 'Felipe Viana', 'Biologia', 'davifelipeviana-75@professor.tb.com', 'h50ZIy5F0X');
insert into telefone_professor values(8, '91', '986720892','CEL', 8);

insert into professor values(9, 'Samuel', 'Sérgio Lopes', 'Quimica', 'ssamuelsergiolopes@professor.tb.com', 'ZG6aGULY0w');
insert into telefone_professor values(9, '91', '984408731', 'CEL', 9);

insert into professor values(10,'Lívia', 'Alícia Giovanna', 'Sociologia', 'liviaaliciagiovannaassuncao-98@professor.tb.com', '14wOFIpGOb' );
insert into telefone_professor values(10, '91', '996125818', 'CEL', 10);

insert into professor values(11,'Luciana', 'Alice Isadora da Silva', 'Filosofia', 'lucianaaliceisadoradasilva@professor.tb.com', 'Ng7I7IMn1I');
insert into telefone_professor values(11, '91', '985417283', 'CEL', 11);

insert into professor values(12,'Guilherme', 'César José da Mata', 'Matematica', 'guilhermecesarjosedamata@professor.tb.com', 'hhOrtk9pAW' );
insert into telefone_professor values(12, '91', '988498583', 'CEL', 12);

insert into professor values(13,'Isaac', 'Thales Raimundo Monteiro', 'Fisica', 'iisaacthalesraimundomonteiro@professor.tb.com', 'IDMqgOd2oe' );
insert into telefone_professor values(13, '91', '994170069', 'CEL', 13);

/*Inserçao tabela Adm - 3 Adm*/
insert into administracao values (1, 'Bryan', 'César', 'bryancersar@adm.tb.com', 'adm12345', 1);
insert into administracao values (2, 'Francisco', 'Raimundo Almeida', 'franciscoraimundoa@adm.tb.com', 'adm12345', 2);
insert into administracao values (3, 'Raul', 'Rodrigo Noah', 'raulrodrigonoahgalvao@adm.tb.com', 'adm12345', 3);
