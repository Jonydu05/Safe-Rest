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

} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}
?>