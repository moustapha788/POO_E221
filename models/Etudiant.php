<?php

namespace App\Model;


class Etudiant extends User
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private string $matricule;
	private string $sexe;
	private string $adresse;

	public function __construct()
	{
	}
	// GETTERS
	public function getMatricule(): string
	{
		return $this->matricule;
	}
	public function getSexe(): string
	{
		return $this->sexe;
	}
	public function getAdresse(): string
	{
		return $this->adresse;
	}
	// SETTERS
	public function setMatricule(string $matricule): self
	{
		$this->matricule = $matricule;
		return $this;
	}
	public function setSexe(string $sexe): self
	{
		$this->sexe = $sexe;
		return $this;
	}
	public function setAdresse(string $adresse): self
	{
		$this->adresse = $adresse;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the demands of the student */
	public function demandes(): array
	{
		return [];
	}
	/* get the registrations of the student */
	public function inscription(): array
	{
		return [];
	}
}
