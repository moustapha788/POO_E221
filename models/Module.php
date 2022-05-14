<?php

namespace App\Model;

use App\Core\Model;


class Module extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private int $id;
	private string $nomModule;
	private string $libelleModule;

	public function __construct()
	{
	}
	// GETTERS
	public function getId(): int
	{
		return $this->id;
	}
	public function getNomModule(): string
	{
		return $this->nomModule;
	}
	public function getLibelleModule(): string
	{
		return $this->libelleModule;
	}
	// SETTERS
	public function setNomModule(string $nomModule): self
	{
		$this->nomModule = $nomModule;
		return $this;
	}
	public function setLibelleModule(string $libelleModule): self
	{
		$this->libelleModule = $libelleModule;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the teachers */
	public function professeurs(): array
	{
		return [];
	}
}
