<?php

namespace Php\Projetop1\Models\DAO;

use PDO;

class Connection
{
  private $connection;

  public function __construct()
  {
    $this->connection = new PDO("mysql:host=localhost; dbname=escola", "root", "");
  }

  public function getConnection()
  {
    return $this->connection;
  }
}