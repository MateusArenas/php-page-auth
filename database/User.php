<?php 

  $tmpsqlite = "/data/db.sqlite";
  if (file_exists($_SERVER['DOCUMENT_ROOT'].$tmpsqlite)) {
    $GLOBALS['SQLITE_FILE_PATH'] = "sqlite:".$_SERVER['DOCUMENT_ROOT'].$tmpsqlite;
  } else {
    $GLOBALS['SQLITE_FILE_PATH'] = "sqlite:".$_SERVER['DOCUMENT_ROOT']."/2022".$tmpsqlite;
  }

  echo $GLOBALS['SQLITE_FILE_PATH'];

  class User {
    public $conn;
    public $fields;
    public $id;

    public function __construct($fields) {
        $this->conn = new PDO($GLOBALS['SQLITE_FILE_PATH']);
        $this->conn->query('CREATE TABLE IF NOT EXISTS "db_users" (
          "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
          "name" VARCHAR,
          "email" VARCHAR,
          "created_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )');
        $this->fields = [
          "name" => $fields["name"],
          "email" => $fields["email"]
        ];
    }

    static function find () {
      try {
        $conn = new PDO($GLOBALS['SQLITE_FILE_PATH']);
        // $stmt = $this->conn->prepare('SELECT * FROM "db_users"');

        $stmt = $conn->query('SELECT * FROM "db_users" ORDER BY "created_at" ASC');

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // $stmt->execute();

        // $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      
        return $results;
      } catch(\PDOException $e) {
        die($e);
      }
    }
  
    public function save () {
      try {

        $stmt = $this->conn->prepare("INSERT INTO db_users (name, email) VALUES(:name, :email)");
      
        foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);

        $stmt->execute();

        $this->id = (int)$this->conn->lastInsertId();
        // $this->id = (int)SQLite3::lastInsertRowID();
      } catch(\PDOException $e) {
        die($e);
      }
    }

    public function update ($update) {

      $stmt =  $this->conn->prepare("UPDATE db_users SET name = :name, email = :email WHERE _id = :id");
    
      $this->changeFields($update);

      $stmt->bindParam("id", $this->id);

      foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);
    
      $stmt->execute();
    }

    public function delete () {
      $stmt =  $this->conn->prepare("DELETE FROM db_users WHERE _id = :id");
    
      $stmt->bindParam("id", $this->id);

      $stmt->execute();
    }

    static function remove ($id) {
      $conn = new PDO($GLOBALS['SQLITE_FILE_PATH']);

      $stmt = $conn->prepare("DELETE FROM db_users WHERE _id = :id");
    
      $stmt->bindParam("id", $id);

      $stmt->execute();
    }

    protected function changeFields ($news) {
      foreach ($this->fields as $key => &$val) {
        if (isset($news[$key])) $this->fields[$key] = $news[$key];
      };
    }
    
  }

  // $user = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
  // $user->save();

  // $user->update([ "name"=> "mateus" ]);

  // $user->delete();

  // $user = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
  // $user->save();

  // User::remove($user->id);

  // $results = User::find();

  // echo json_encode($results);
?>