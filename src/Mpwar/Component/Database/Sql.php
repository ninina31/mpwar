<?php

  namespace Mpwar\Component\Database;
  use Mpwar\Component\Database\DBInterface;
  use PDO;

  class Sql implements DBInterface
  {
    protected $host;
    protected $db_name;
    protected $username;
    protected $password;
    protected $connection;
    protected $statement;

    function __construct($host="localhost", $db_name="framework", $username="framework", $password="")
    {
      $this->host = $host;
      $this->db_name = $db_name;
      $this->username = $username;
      $this->password = $password;
    }

    public function connect()
    {
      
      try {
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
      }
      catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
      }

    }

    protected function prepareQuery($query)
    {
      $this->statement = $this->connection->prepare( $query );
    }

    protected function bindParameters($pos, $param)
    {
      $this->statement->bindParam($pos, $param);
    }

    protected function executeQuery()
    {
      return $this->statement->execute();
    }

    protected function countRows()
    {
      return $this->statement->rowCount();
    }

    protected function fetch()
    {
      return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    protected function isSingleResult()
    {
      return $this->countRows() == 1;
    }

    public function getItem($id)
    {
      try{
        $this->connect();
          
        $query = "select * from items where id = ?";
        $this->prepareQuery($query);
        
        $this->bindParameters(1, $id);
        
        $this->executeQuery();

        if(!$this->isSingleResult()){
          return false;
        }
          
        $row = $this->fetch();
      
        return $row['name'];
      }
      //to handle error
      catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
      }
    }

    public function insertItem($name)
    {
      try{

        $this->connect();

        $query = "INSERT INTO items SET name = ?";

        $this->prepareQuery($query);

        $this->bindParameters(1, $name);

        if($this->executeQuery()){
          return true;
        }else{
          return false;
        }
      }
      //to handle error
      catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
      }
    }

    public function updateItem($id, $name)
    {
      try{

        $this->connect();

        $query = "UPDATE items SET name = ? WHERE id = ?";

        $this->prepareQuery($query);

        $this->bindParameters(1, $name);
        $this->bindParameters(2, $id);

        if($this->executeQuery()){
          return true;
        }else{
          return false;
        }
      }
      //to handle error
      catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
      }
    }

    public function deleteItem($id)
    {
      try{

        $this->connect();

        $query = "DELETE FROM items WHERE id = ?";

        $this->prepareQuery($query);

        $this->bindParameters(1, $id);

        if($this->executeQuery()){
          return true;
        }else{
          return false;
        }
      }
      //to handle error
      catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
      }
    }
  }
