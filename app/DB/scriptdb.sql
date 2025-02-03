use crudphp;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
ALTER TABLE usuarios ADD COLUMN is_admin TINYINT(1) NOT NULL DEFAULT 0;
CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,     
    nome VARCHAR(255) NOT NULL,             
    numero_pessoas INT NOT NULL,           
    numero_mesa INT NOT NULL,              
    data DATE NOT NULL,                    
    hora TIME NOT NULL,                    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

select * from reservas;
select * from usuarios;

