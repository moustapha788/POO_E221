<?php

namespace App\Model;

use App\Core\Model;


class Classe extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private int $id;
	private string $libelle;
	private string $filiere;
	private string $niveau;

	public function __construct()
	{
	}
	// GETTERS
	public function getId(): int
	{
		return $this->id;
	}
	public function getLibelle(): string
	{
		return $this->libelle;
	}
	public function getFiliere(): string
	{
		return $this->filiere;
	}
	public function getNiveau(): string
	{
		return $this->niveau;
	}
	// SETTERS
	public function setLibelle(string $libelle)
	{
		$this->libelle = $libelle;
		return $this;
	}
	public function setFiliere(string $filiere): self
	{
		$this->filiere = $filiere;
		return $this;
	}
	public function setNiveau(string $niveau): self
	{
		$this->niveau = $niveau;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the rp */
	public function rp(): RP
	{
		return new RP();
	}
	/* get the teachers */
	public function professeurs(): array
	{
		return [];
	}
}
