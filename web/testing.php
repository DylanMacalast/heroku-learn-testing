<?php

     $db = parse_url(getenv("DATABASE_URL"));

     $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    
     function run(){
        var_dump($this->pdo);
    
        $query = $this->pdo->prepare('SELECT * FROM test_table');
        $query->execute();
        print_r($query->fetchAll());
    }
   
    run();


