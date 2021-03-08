create table aluno(
    IDALUNO integer,
     nome varchar(100) not null,
     email varchar(150) not null UNIQUE,
     senha varchar(32) not null,
     cpf varchar(11) not null,
     sexo varchar(10),
     primary key(IDALUNO)
);

create table endereco(
	IDENDERECO INT PRIMARY KEY AUTO_INCREMENT, 
	RUA VARCHAR(30) NOT NULL,
	BAIRRO VARCHAR(30) NOT NULL,
	CIDADE VARCHAR(30) NOT NULL,
	ESTADO CHAR(2) NOT NULL,
	ID_ALUNO INT UNIQUE,

	FOREIGN KEY(ID_ALUNO)
	REFERENCES aluno(IDALUNO)
);

CREATE TABLE telefone(
	IDTELEFONE INT PRIMARY KEY AUTO_INCREMENT, 
	TIPO ENUM('RES','COM','CEL') NOT NULL,
	NUMERO VARCHAR(10) NOT NULL,
	ID_ALUNO INT,

	FOREIGN KEY(ID_ALUNO)
	REFERENCES aluno(IDALUNO)
);