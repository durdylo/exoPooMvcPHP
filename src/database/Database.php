<?php

namespace App\Database;

use PDO;

/**
 * Classe de connexion à la BDD
 */
class Database
{

    private string $username = 'root';
    private string $pwd = '';
    private string $host = "localhost";
    private string $port = '3308';
    private string $dbname = 'cinema';
    private PDO $connexion;

    public  function getConnexion()
    {
        return  $this->connexion = new PDO("mysql://host=$this->host;port=$this->port; dbname=$this->dbname", $this->username, $this->pwd);
    }
}
