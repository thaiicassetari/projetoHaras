CREATE TABLE cavalo (
  id_cavalo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  haras_id_Haras INTEGER UNSIGNED NOT NULL,
  nome_cavalo VARCHAR(255) NULL,
  especie_cavalo VARCHAR(30) NULL,
  PRIMARY KEY(id_cavalo),
  INDEX cavalo_FKIndex1(haras_id_Haras)
);

CREATE TABLE clientes (
  id_clientes INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  funcionario_id_funcionario INTEGER UNSIGNED NOT NULL,
  nome_clientes VARCHAR(255) NULL,
  fone_clientes VARCHAR(20) NULL,
  cpf_clientes VARCHAR(11) NULL,
  dt_nascimento_clientes DATE NULL,
  genero_clientes CHAR(1) NULL,
  PRIMARY KEY(id_clientes),
  INDEX clientes_FKIndex1(funcionario_id_funcionario)
);

CREATE TABLE funcionario (
  id_funcionario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  haras_id_Haras INTEGER UNSIGNED NOT NULL,
  nome_funcionario VARCHAR(255) NULL,
  cargo_funcionario VARCHAR(40) NULL,
  area_funcionario VARCHAR(40) NULL,
  PRIMARY KEY(id_funcionario),
  INDEX funcionario_FKIndex1(haras_id_Haras)
);

CREATE TABLE haras (
  id_Haras INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_Haras VARCHAR(45) NULL,
  PRIMARY KEY(id_Haras)
);

CREATE TABLE passeios (
  id_passeios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  clientes_id_clientes INTEGER UNSIGNED NOT NULL,
  cavalo_id_cavalo INTEGER UNSIGNED NOT NULL,
  tipo_passeios VARCHAR(40) NULL,
  data_passeios DATETIME NULL,
  PRIMARY KEY(id_passeios, clientes_id_clientes, cavalo_id_cavalo),
  INDEX clientes_has_cavalo_FKIndex1(clientes_id_clientes),
  INDEX clientes_has_cavalo_FKIndex2(cavalo_id_cavalo)
);


