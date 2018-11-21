create table usuarios(
	id int not null primary key auto_increment,
	usuario varchar(50) not null,
	email varchar(50) not null,
	senha varchar(30) not null
);