<?php

namespace App\Model;

use App\Core\Model;


class Demande extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private int $id;
	private string $motif;
	private string $date;

	public function __construct()
	{
	}
	// GETTERS
	public function getId(): int
	{
		return $this->id;
	}
	public function getMotif(): string
	{
		return $this->motif;
	}
	public function getDate(): string
	{
		return $this->date;
	}

	// SETTERS
	public function setDate(string $date): self
	{
		$this->date = $date;
		return $this;
	}
	public function setMotif(string $motif): self
	{
		$this->motif = $motif;
		return $this;
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the student */
	public function etudiant(): Etudiant
	{
		return new Etudiant();
	}
	/* get the RP */
	public function rp(): RP
	{
		return new RP();
	}
}
