CREATE TABLE associado (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(70) DEFAULT NULL,
    nascimento DATE DEFAULT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE dependente (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(70) DEFAULT NULL,
    nascimento DATE DEFAULT NULL,
    id_associado INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_associado) REFERENCES associado(id)
);