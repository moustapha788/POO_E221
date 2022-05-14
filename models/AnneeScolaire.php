<?php

namespace App\Model;

use App\Core\Model;



class AnneeScolaire extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private int $id;
	private string $annee;
	public function __construct()
	{
	}
	// GETTERS
	public function getId(): int
	{
		return $this->id;
	}
	public function getAnnee(): string
	{
		return $this->annee;
	}
	// SETTERS
	public function setAnnee(string $annee): self
	{
		$this->annee = $annee;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the registrations  of the year*/
	public function inscriptions(): array
	{
		return [];
	}
	
}
