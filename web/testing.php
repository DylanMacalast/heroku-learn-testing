<?php
class TestingDB
{

    public function setUpDB()
    {
        $db = parse_url(getenv("DATABASE_URL"));

        $pdo = new PDO("pgsql:" . sprintf(
           "host=%s;port=%s;user=%s;password=%s;dbname=%s",
           $db["host"],
           $db["port"],
           $db["user"],
           $db["pass"],
           ltrim($db["path"], "/")
       ));

       return $pdo;
    }
   
   
   public function run(){
        $query = $this->setUpDB()->pdo->prepare('SELECT * FROM test_table');
       $query->execute();
       print_r($query->fetchAll());
   }
   

  

}
     
$test = new TestingDB();
$test->run();

/**
 * Try it this way maybe
 */

 /**
  * None have worked so far ... this is where you left off you were trying to 
  * connect to a postgres database
  */
$db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD");

