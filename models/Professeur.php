<?php

namespace App\Model;


class Professeur extends Personne
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private string $grade;
	public function __construct()
	{
	}
	// GETTERS
	public function getGrade(): string
	{
		return $this->grade;
	}
	// SETTERS
	public function setGrade(string $grade): self
	{
		$this->grade = $grade;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the rp */
	public function rp(): RP
	{
		return new RP();
	}
	/* get the modules */
	public function modules(): array
	{
		return [];
	}
	/* get the classes */
	public function classes(): array
	{
		return [];
	}
}
