CREATE DATABASE IF NOT EXISTS gerador_portfolio
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE gerador_portfolio;

-- =========================================================================
-- 1. CRIAÇÃO DAS TABELAS (SEM CHAVES ESTRANGEIRAS)
-- =========================================================================

CREATE TABLE planos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    limite_projetos INT NOT NULL,
    acesso_templates_pro BOOLEAN NOT NULL DEFAULT FALSE,
    descricao TEXT
);

CREATE TABLE templates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    arquivo_css VARCHAR(255) NOT NULL,
    preview_img VARCHAR(255),
    plano_minimo_id INT NOT NULL DEFAULT 1 -- Define qual plano libera este template
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255),
    titulo_profissional VARCHAR(100),
    biografia TEXT,
    foto_perfil VARCHAR(255),
    plano_id INT NOT NULL DEFAULT 1,
    template_id INT NOT NULL DEFAULT 1,
    cor_personalizada VARCHAR(20) DEFAULT '#0d6efd',
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE projetos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    imagem VARCHAR(255),
    link_projeto VARCHAR(255),
    tecnologias VARCHAR(150),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pagamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    plano_id INT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    status ENUM('pendente', 'aprovado', 'cancelado') DEFAULT 'aprovado',
    data_pagamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================================
-- 2. ADIÇÃO DAS CHAVES ESTRANGEIRAS (RELACIONAMENTOS)
-- =========================================================================

ALTER TABLE templates
    ADD CONSTRAINT fk_templates_plano
        FOREIGN KEY (plano_minimo_id) REFERENCES planos(id);

ALTER TABLE usuarios
    ADD CONSTRAINT fk_usuarios_plano
        FOREIGN KEY (plano_id) REFERENCES planos(id),
    ADD CONSTRAINT fk_usuarios_template
        FOREIGN KEY (template_id) REFERENCES templates(id);

ALTER TABLE projetos
    ADD CONSTRAINT fk_projetos_usuario
        FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
        ON DELETE CASCADE;

ALTER TABLE pagamentos
    ADD CONSTRAINT fk_pagamentos_usuario
        FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
        ON DELETE CASCADE,
    ADD CONSTRAINT fk_pagamentos_plano
        FOREIGN KEY (plano_id) REFERENCES planos(id);

-- =========================================================================
-- 3. DADOS INICIAIS (SEED)
-- =========================================================================

INSERT INTO planos (id, nome, preco, limite_projetos, acesso_templates_pro, descricao) VALUES
(1, 'Plano Gratuito', 0.00, 3, FALSE, 'Até 3 projetos e templates básicos.'),
(2, 'Plano Pro', 29.90, 15, TRUE, 'Até 15 projetos e acesso aos templates Pro.'),
(3, 'Plano Avançado', 59.90, 999, TRUE, 'Projetos ilimitados, todos os templates Pro e personalização completa.');

INSERT INTO templates (id, nome, arquivo_css, preview_img, plano_minimo_id) VALUES
(1, 'Clássico Minimalista', 'tema-minimal.css', 'preview-minimal.png', 1), -- Liberado no Gratuito
(2, 'Dark Developer Pro', 'tema-dark.css', 'preview-dark.png', 2),       -- Exige Plano Pro ou superior
(3, 'Criativo Moderno Pro', 'tema-criativo.css', 'preview-criativo.png', 2); -- Exige Plano Pro ou superior