<?php
class Database
{
  public $connection;
  public function __construct()
  {
    $config = [
      "host" => 'localhost',
      "port" => 3306,
      "dbname" => 'myapp'
    ];

    $dsn = "mysql:" . http_build_query($config, "", ";");
    $this->connection = new PDO($dsn, "myadmin", "76766767", [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query)
  {

    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}
