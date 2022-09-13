<?php 

  $conn new SQLite3('/tmp/db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $conn->query('CREATE TABLE IF NOT EXISTS "users" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "name" VARCHAR,
    "email" VARCHAR
    -- "password" VARCHAR,
    -- "time" DATETIME
  )');

?>