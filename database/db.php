<?php
class database {
  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;
  
  public function __construct($db_name='sakila', $db_user='root', $db_pass = 'secret', $db_host = 'localhost'){

    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_host;

  }

  public function getPdo(){
    if ($this -> pdo === null){
      $user='root';
      $pass="secret";
      $pdo = new PDO('mysql:host=localhost;dbname=sakila', $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo =$pdo;
    }
    return $this->pdo;

  }
  
  public function getALL ($statement){
    $req =$this->getPdo()->query($statement)-> fetchAll(PDO::FETCH_OBJ);
    return $req ;
  } 

  

}
