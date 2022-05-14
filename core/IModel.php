<?php
namespace App\Core;

interface IModel
{
  /*
   TODO::: LE QUOI ?
   */
  //? méthodes d'instances
  public function insert(string $sql): int;
  public function update(): int;
  //? méthodes statiques
  public static function delete(int $id): int;
  public static function findAll(): array;
  public static function findBy(string $sql, array $data = null, bool $single = false): object|array|null;
  public static function findById(int $id): object|null;
}
