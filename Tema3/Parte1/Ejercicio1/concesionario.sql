CREATE TABLE IF NOT EXISTS grupos(
	id		int(10) auto_increment not null,
	nombre		varchar(100) not null,
	ciudad		varchar(150),
	CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


CREATE TABLE IF NOT EXISTS coches(
	id		int(10) auto_increment not null,
	modelo		varchar(100) not null,
	marca		varchar(50),
	precio		float(20,2),
	stock		int(10),
	CONSTRAINT pk_coches PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE IF NOT EXISTS vendedores(
	id		int(10) auto_increment not null,
	grupo_id	int(10) not null,
	jefe		int(10),
	nombre		varchar(100) not null,
	apellidos	varchar(150),
	cargo		varchar(50),
	fecha		date,
	sueldo		float(20,2),
	comision	float(10,2),
	CONSTRAINT pk_vedendores PRIMARY KEY (id),
	CONSTRAINT fk_vedendor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
	CONSTRAINT pk_vedendores FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE IF NOT EXISTS clientes(
	id		int(10) auto_increment not null,
	vendedor_id	int(10) not null,
	nombre		varchar(100) not null,
	ciudad		varchar(150),
	gastado		float(20,2),
	CONSTRAINT pk_clientes PRIMARY KEY (id),
	CONSTRAINT fk_clientes_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE IF NOT EXISTS encargos(
	id		int(10) auto_increment not null,
	cliente_id	int(10) not null,
	coche_id	int(10) not null,
	cantidad	int(10),
	fecha		date,
	CONSTRAINT pk_encargos PRIMARY KEY (id),
	CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
	CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES coches(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO grupos VALUES(null, 'gente', 'Cadiz');
INSERT INTO coches VALUES(null, 'Murcielago', 'Lamborgini', 600000, 5);
INSERT INTO vendedores VALUES(null, 1, null, 'Antonio', 'Vellido', "Gerente", curdate(), 30000, 1000);
INSERT INTO clientes VALUES(null, 1, 'Raul', 'Pamplona', 600000);
INSERT INTO encargos VALUES(null, 1, 1, 1, curdate());