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

  $result2 = $conn->query('SELECT * FROM "db_users"');
  $re = $result2->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($re);
  // if($result2){
  //     while($row = $result2->fetch(PDO::FETCH_ASSOC)){
  //       echo '<li>'.$row['name'].'</li>';
  //     }
  // }

?>