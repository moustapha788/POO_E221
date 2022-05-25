<?php

namespace App\Core;

class Database
{
    public \PDO|null $pdo = null;
    public const DB_HOST = 'localhost:3308';
    public const DB_NAME = 'user_poo'; //Name of the database
    public const DB_USERNAME = 'user_poo'; //Username to use
    public const DB_PASSWORD = 'user_poo'; //Password for that user
    public string $dsn = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME;

    public array $options = [
        \PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ, //make the default fetch be an anonymous object with column names as properties
    ];

    public function openConnection(): void
    {
        try {
            //Create PDO instance
            $this->pdo = new \PDO($this->dsn, self::DB_USERNAME, self::DB_PASSWORD);
        } catch (\Exception $th) {
            $th->getMessage();
        }
    }
    public function closeConnexion(): void
    {
        $this->pdo = null;
    }
    public function executeSelect(string $sql, array $data = null, bool $single = false): object|array|null
    {
        // préparation de la requête
        $query = $this->pdo->prepare($sql);
        // execution de la requête préparée(contrairement à ....)
        $query->execute($data);
        if ($single) {
            // récupère un résultat
            $result = $query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount() === 0) {
                return null;
            }
        } else {
            // récupère plusieurs résultats
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql, array $data = null): int
    {
        // ! s'il s'agit d'une requête insert =>retourner l'id généré

        // préparation de la requête
        $query = $this->pdo->prepare($sql);
        // execution de la requête
        $query->execute($data);
        // le nombre de ligne affecté par la requête
        return $query->rowCount();
    }
}
