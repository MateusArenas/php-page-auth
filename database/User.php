<?php 

  class User {
    public $fields;
    public $id;
    public $conn;

    public function __construct($fields) {
        $this->conn = new PDO('sqlite:/tmp/db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

        $this->conn->query('CREATE TABLE IF NOT EXISTS "db_users" (
          "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
          "name" VARCHAR,
          "email" VARCHAR
        )');

        $this->fields = [
          "name" => $fields["name"],
          "email" => $fields["email"]
        ];
    }

    static function find () {
      try {
        // $stmt = $this->conn->prepare('SELECT * FROM "db_users"');

        $stmt = $this->conn->query('SELECT * FROM "db_users"');

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
      $stmt = $this->conn->prepare("UPDATE db_users SET name = :name, email = :email WHERE _id = :id");
    
      $this->changeFields($update);

      $stmt->bindParam("id", $this->id);

      foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);
    
      $stmt->execute();
    }

    public function delete () {
      $stmt = $this->conn->prepare("DELETE FROM db_users WHERE _id = :id");
    
      $stmt->bindParam("id", $this->id);

      $stmt->execute();
    }

    static function remove ($id) {
      $stmt = $this->conn->prepare("DELETE FROM db_users WHERE _id = :id");
    
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