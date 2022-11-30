<?php
/* Credenciais do banco de dados. Supondo que você esteja executando o MySQL
servidor com configuração padrão (usuário 'root' sem senha) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
 
/* Tentativa de conexão com o banco de dados MySQL */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $table = 'users';
    $tableExists = $pdo->query("SHOW TABLES LIKE '$table'")->rowCount() > 0;
    if($tableExists != 1){
        $query="
        CREATE TABLE `test`.`users` (
            `id` INT NOT NULL AUTO_INCREMENT , 
            `username` VARCHAR(50) NOT NULL , 
            `email` VARCHAR(100) NOT NULL , 
            `password` VARCHAR(255) NOT NULL , 
            `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
            PRIMARY KEY (`id`)
            ) 
            ENGINE = InnoDB;
        ";
        $pdo->exec($query);
    }
    $table2 = 'residenciais';
    $tableExists = $pdo->query("SHOW TABLES LIKE '$table2'")->rowCount() > 0;
    if($tableExists != 1){
        $query="
        CREATE TABLE `test`.`residenciais` (
            `id` INT NOT NULL AUTO_INCREMENT , 
            `nome` VARCHAR(70) NOT NULL , 
            `descricao` VARCHAR(700) NOT NULL , 
            `local` VARCHAR(200) NOT NULL , 
            `regiao` VARCHAR(10) NOT NULL , 
            `maps` VARCHAR(60) NOT NULL , 
            `telefone` VARCHAR(16) NOT NULL , 
            `whatsapp` VARCHAR(16) NOT NULL , 
            `email` VARCHAR(100) NOT NULL , 
            `desconto` VARCHAR(2) NOT NULL , 
            `num_vagas` VARCHAR(3) NOT NULL , 
            `avaliacao` INT(2) NOT NULL , 
            `quant_avaliacao` INT(10) NOT NULL , 
            PRIMARY KEY (`id`)
            ) 
            ENGINE = InnoDB;
        ";
        $pdo->exec($query);
    }
    $table3 = 'notas';
    $tableExists = $pdo->query("SHOW TABLES LIKE '$table3'")->rowCount() > 0;
    if($tableExists != 1){
        $query="
                CREATE TABLE `test`.`notas` (
                    `id_usuario` INT(4) NOT NULL 
                    ) 
                ENGINE = InnoDB;
            ";
        $pdo->exec($query);
    }
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}
?>