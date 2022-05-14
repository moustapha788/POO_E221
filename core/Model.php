<?php

namespace App\Core;

class Model implements IModel
{
    // ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
    protected static string $tableName;
    public function __construct()
    {
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
        $input=get_called_class();
        $array=explode('\\',$input);
        $input=array_pop($array);        
        return $input;
    }
    /* 
    TODO::: LE COMMENT ?
    */
    public function insert(string $sql): int
    {
        return 0;
    }
    public function update(): int
    {
        return 0;
    }
    public static function delete(int $id): int
    {
        $sql = "DELETE FROM " . self::getTableName() . " WHERE id =? ";
        echo $sql;

        return 0;
    }
    public static function findAll(): array
    {
        $sql = "SELECT * FROM " . self::getTableName();
        echo $sql;
        return [];
    }
    public static function findBy(string $sql, array $data = null, bool $single = false): object|array|null
    {
        return null;
    }
    public static function findById(int $id): object|null
    {
        $sql = "SELECT * FROM " . self::getTableName() . " WHERE id =? ";
        echo $sql;

        return null;
    }
}
