
create table estado(
	id integer primary key not null,
	sigla char(2),
	nome text
);

create table cidade(
	id integer primary key not null,
	nome text,
	id_estado integer references estado(id)
);

create table pessoa(
	id integer primary key not null,
	nome text,
	endereco text,
	bairro text,
	telefone text,
	email text,
	id_cidade integer references cidade(id)
	
);

insert into estado values(1,'AC','Acre');  
insert into cidade values(1,'Rio Branco',1);  