create table usuarios(
	 id int not null primary key auto_increment,
	 usuario varchar(30),
	 email varchar(30),
	 senha varchar(20),
	 tipo enum('adm', 'hosp', 'prop')
);

