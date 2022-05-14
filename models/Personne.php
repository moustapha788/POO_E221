<?php

namespace App\Model;

use App\Core\Model;

abstract class Personne extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	protected int $id;
	protected string $nomComplet;
	protected static string $role;
	private static int $nbrPersonne;
	public function __construct()
	{
	}
	// GETTERS 
	public function getId(): int
	{
		return $this->id;
	}
	public function getNomComplet(): string
	{
		return $this->nomComplet;
	}
	public static function getRole(): string
	{
		// self::$role = "ROLE_" . strtoupper(get_called_class());
		self::$role = "ROLE_" . strtoupper(str_replace(__NAMESPACE__.'\\', "", get_called_class()));
		return self::$role;
	}
	public static function getNbrPersonne(): int
	{
		return self::$nbrPersonne;
	}
	// SETTERS
	public function setNomComplet(string $nomComplet): self
	{
		$this->nomComplet = $nomComplet;
		return $this;
	}
	public  function setRole(string $role): void
	{
		self::$role = $role;
	}
	// REQUÊTAGE
	public static function findAll(): array
	{
		if (get_called_class() === "User") {
			$sql = "SELECT * FROM " . parent::getTableName() . " WHERE `role` not like `ROLE_PROFESSEUR`";
		} else if (get_called_class() === "Personne") {
			$sql = "SELECT * FROM " . parent::getTableName();
		} else {
			$sql = "SELECT * FROM " . parent::getTableName() . " WHERE `role` like `" . self::getRole() . "`";
		}
		echo $sql;
		return [];
	}
}
