<?php

namespace App\Model;

use App\Core\Model;


class Inscription extends Model
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	private int $id;
	public function __construct()
	{
	}
	// GETTERS
	public function getId(): int
	{
		return $this->id;
	}

	// SETTERS	
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the ac */
	public  function ac(): AC
	{
		$sql = "SELECT
			p.*
		FROM
			inscription i,
			personne p
		WHERE
			p.id = i.ac_id
			and p.role LIKE 'ROLE_AC'
			and i.id =?";
		return parent::findBy($sql, [$this->id]);
	}
	/* get the student */
	public function etudiant(): Etudiant
	{
		$sql = "SELECT
			p.*
		FROM
			inscription i,
			personne p
		WHERE
			p.id = i.ac_id
			and p.role LIKE 'ROLE_ETUDIANT'
			and i.id = ?";
		return parent::findBy($sql, [$this->id]);
	}
	/* get the year */
	public function anneeScolaire(): AnneeScolaire
	{
		$sql = "SELECT
			p.*
		FROM
			inscription i,
			annee_scolaire a
		WHERE
			a.id = i.annee_scolaire_id
			and i.id = ?";
		return parent::findBy($sql, [$this->id]);
	}
	/* get the class */
	public function classe(): Classe
	{
		return new Classe();
	}
}
