<?php

namespace App\Model;


abstract class User extends Personne
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE

	protected string $login;
	protected string $password;

	public function __construct()
	{
	}
	// GETTERS
	public function getPassword(): string
	{
		return $this->password;
	}
	public function getLogin(): string
	{
		return $this->login;
	}
	// SETTERS	
	public function setLogin(string $login): self
	{
		$this->login = $login;
		return $this;
	}
	public function setPassword(string $password): self
	{
		$this->password = $password;
		return $this;
	}
	// REQUÊTAGE	
	public function insert(): int
	{
		// pour (RP et AC) et Etudiant qui doit redéfinir encore 
		$db = parent::database();
		$db->openConnection();
		$sql = "INSERT INTO `personne` (`nom_complet`, `role`,`login`, `password`) VALUES (?,?,?,?);";
		$data = [$this->nomComplet, parent::getRole(), $this->login, $this->password];
		$result = $db->executeUpdate($sql, $data);
		$db->closeConnexion();
		echo $sql;
		return $result;
	}
	public static function findUserByLoginAndPassword(string $login, string $password): object|null
	{
		$sql = "SELECT * FROM " . parent::getTableName() . " WHERE login=? and password=?";
		$data = [$login, $password];
		return parent::findBy($sql, $data,true);
	}
}
