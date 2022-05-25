<?php

namespace App\Core;

class Model implements IModel
{
    // ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
    protected static string $tableName;
    public function __construct()
    {
    }
    protected static function database(): Database
    {
        return new Database();
    }

    // GETTERS
    public static function getTableName(): string
    {
        $ourTable = self::rm_nameSpace_in_called_class();
        $singleTable = ['User', 'RP', 'AC', 'Etudiant', 'Professeur', 'Personne'];
        self::$tableName = in_array($ourTable, $singleTable) ? "personne" : self::PascalCase_to_snake_case(self::rm_nameSpace_in_called_class());
        return self::$tableName;
    }
    // SETTERS
    public static function setTableName(string $tableName): void
    {
        self::$tableName = $tableName;
    }
    public static function PascalCase_to_snake_case($input)
    {
        $pattern = '!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!';
        preg_match_all($pattern, $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ?
                strtolower($match) :
                lcfirst($match);
        }
        return implode('_', $ret);
    }
    public static function rm_nameSpace_in_called_class(): string|array
    {
        $array = explode('\\', get_called_class());
        $input = trim(array_pop($array));
        return $input;
    }
    /* 
    TODO::: LE COMMENT ?
    */
    public function insert(): int
    {
        // $sql="INSERT INTO `personne` (`id`, `nom_complet`, `role`, `login`, `password`, `grade`, `matricule`, `sexe`, `adresse`) VALUES (NULL, 'Sékou Ba Dialla', 'ROLE_PROFESSEUR', NULL, NULL, 'Ingénieur', NULL, NULL, NULL);";
        return 0;
    }
    public function update(): int
    {
        return 0;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->openConnection();
        $sql = "DELETE FROM " . self::getTableName() . " WHERE id =? ";
        $data = [$id];
        $result = $db->executeUpdate($sql, $data);
        $db->closeConnexion();
        return $result;
    }
    public static function findAll(): array|null
    {
        $sql = "SELECT * FROM " . self::getTableName();
        return self::findBy($sql);
    }
    public static function findBy(string $sql, array $data = null, bool $single = false): object|array|null
    {
        $db = self::database();
        $db->openConnection();
        $result = $db->executeSelect($sql, $data, $single);
        $db->closeConnexion();
        return $result;
    }
    public static function findById(int $id): object|null
    {
        $sql = "SELECT * FROM " . self::getTableName() . " WHERE id =? ";
        $data = [$id];
        return self::findBy($sql, $data, true);
    }
}
