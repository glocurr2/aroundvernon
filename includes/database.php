<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

class MyDatabase
{

  private $connection;

  function __construct()
  {
    $this->open_connection();
  }

  public function open_connection()
  {

    $dbhost = "";
    $dbuser = "";
    $dbpass = "";
    $db = "";

    $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $db);


    if (!$this->connection) {
      die("Database connection failed: " . mysqli_error());
    }
  }

  public function close_connection()
  {
    if (isset($this->connection)) {
      mysqli_close($this->connection);
      unset($this->connection);
    }
  }

  public function query($sql)
  {
    $result = mysqli_query($this->connection, $sql);
    $this->confirm_query($result);
    return $result;
  }

  public function fetch_array($result_set)
  {
    return mysqli_fetch_array($result_set);
  }

  public function fetch_assoc_array($result_set)
  {
    return mysqli_fetch_assoc($result_set);
  }

  public function num_rows($result_set)
  {
    return mysqli_num_rows($result_set);
  }

  public function affected_rows()
  {
    return mysqli_affected_rows($this->connection);
  }

  private function confirm_query($result)
  {
    if (!$result) {
      $output = "Database query failed: " . mysqli_error() . "<br /><br />";
      die($output);
    }
  }
}

$db = new MyDatabase();
