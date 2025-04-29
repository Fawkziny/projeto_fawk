CREATE DATABASE IF NOT EXISTS projeto_fawk CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

SHOW DATABASES;

USE projeto_fawk;

CREATE TABLE usuarios (
	id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14),
    data_nascimento DATE,
    celular VARCHAR(20),
    rua VARCHAR(255),
    numero VARCHAR(255),
    complemento VARCHAR(255),
    bairro VARCHAR(255),
    cidade VARCHAR(255),
    cep VARCHAR(10),
    estado CHAR(2),
    email VARCHAR(255) NOT NULL,
    tipo ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    deleted_at TIMESTAMP NULL DEFAULT NULL
    
);

CREATE TABLE IF NOT EXISTS formas_pagamentos (
	id_forma_pagamento INT UNSIGNED auto_increment primary key,
    descricao VARCHAR(100) NOT NULL,
    taxa DECIMAL(4,3), -- Valor em porcentagem a ser aplicado (50% = 0.5), (5% = 0.05)
    desconto DECIMAL(4,3), -- Valor em porcentagem a ser aplicada
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    deleted_at TIMESTAMP NULL DEFAULT NULL
    
    );
    
    CREATE TABLE IF NOT EXISTS vendas (
    id_vendas BIGINT UNSIGNED auto_increment PRIMARY KEY,
    -- DEMAIS CAMPOS --
    forma_pagamento_id INT NOT NULL,
    foreign key (forma_pagamento_id) references formas_pagamentos (id_forma_pagamento)
    );
    
    -- Explicação FK Foreign Key, (coluna_fk) references tabela_pai(id_tabela)