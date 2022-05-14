<?php

namespace App\Model;


class RP extends User
{
	// ATTRIBUTS D'INSTANCE ET/OU DE CLASSE
	public function __construct()
	{
	}
	// REQUÊTAGE
	// FONCTIONS NAVIGATIONNELLES
	/* get the demands */
	public function demandes(): array
	{
		return [];
	}
	/* get the teachers added */
	public function professeurs(): array
	{
		return [];
	}
	/* get the class created */
	public function clases(): array
	{
		return [];
	}
}
