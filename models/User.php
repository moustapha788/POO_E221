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
	public function findUserByLoginAndPassword(string $login, string $password): object|null
	{
		// $sql="SELECT * FROM ".parent::getTableName()." WHERE login=? and password=?";
		// $data=[$login,$password];
		// self::findBy($sql,$data,true);
		return null;
	}
}
