<?php       

namespace App\Core; 
use PDO;
use PDOException;

class Database {
    public static function conectar(){
        $host = 'localhost'; // Endereço do servidor MySQL
        $porta = '3306'; // Porta do servidor MySQL
        $banco = 'sistema_fawk'; // Nome do banco de dados
        $usuario = 'root'; // Usuário do banco de dados
        $senha = ''; // Senha do banco de dados

        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4"; // Data Source Name
        try {
            return new PDO($dsn, $usuario, $senha, [ // Configurações de conexão
            // Configurações de erro e modo de busca
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Modo de busca padrão
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);


        } catch (PDOException $e) {
            // Tratar erro de conexão
            die ("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
}