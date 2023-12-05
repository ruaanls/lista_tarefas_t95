<?php

/** 
 *  Documentação usando o padrão PHPDOC
 * Classe de acesso ao banco de dados
*/

class DB
{
    private $servidor = "localhost";
    private $porta = "3306";
    private $usuario = "root";
    private $senha = "";
    private $nomebanco = "php_t95";
    private $db;

    public function __construct()
    {
        if ($this -> db == null)
        {
            $this -> conectaDB();
        }
        
    }
    public function conectaDB()
    {
        try
        {
            $db = new PDO("mysql: dbname={$this -> nomebanco}; host={$this -> servidor}; port={$this->porta}", $this -> usuario, $this -> senha);
            return $this -> db;
        }
        
        catch(PDOException $erro)
        {
            print("<h3> ERRO AO CONECTAR-SE. O ERRO FOI: {$erro-> getMessage()} </h3>" );
        }
    }

    public function cadastraDados()
    {
        $sql = "INSERT INTO categorias(categoria, alteracao, ip) VALUES (?, ?, ?)";

        $executa = $this->db->prepare($sql);

        $executa->exec([$categoria, $alteracao, $ip]);

        $this -> fechaConexao();
    }

    public function buscaDados()
    {
        echo ("DADOS ENCONTRADOS");
    }

    public function alteraDados()
    {
        print("DADOS ALTERADOS");
    }

    public function apagaDados()
    {
        print("DADOS APAGADOS");
    }

    public function fechaConexao()
    {
        $this -> db = null;
    }


}

// Criar o objeto e fazer a ponte com a classe

$db = new DB();
$db -> conectaDB();
#print $db -> servidor;
?>