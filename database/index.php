<?php 

  $conn = new PDO('sqlite:/tmp/db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  try {
    $conn->query('CREATE TABLE IF NOT EXISTS "db_users" (
      "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      "name" VARCHAR,
      "email" VARCHAR
    )');
  } catch(\PDOException $e) {
    die($e);
  }

  $result = $conn->query("SELECT `name` FROM sqlite_master WHERE `type`='table'  ORDER BY name");
  if($result){
      while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo '<li>'.$row['name'].'</li>';
      }
  }
?>