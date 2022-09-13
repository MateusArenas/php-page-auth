<?php 

  class User {
    protected $conn;
    public $fields;
    public $id;

    public function __construct($fields) {
        $this->fields = [
          "name" => $fields["name"],
          "email" => $fields["email"]
        ];
        $this->conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");
    }

    static function find () {
      $conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

      $stmt = $conn->prepare("SELECT * FROM db_users");

      $stmt->execute();
    
      return $stmt->fetchAll();
    }
  
    public function save () {
      $stmt = $this->conn->prepare("INSERT INTO db_users (name, email) VALUES(:name, :email)");
    
      foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);

      $stmt->execute();

      $this->id = (int)$this->conn->lastInsertId();
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
      $conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

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

  $user = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
  $user->save();

  $user->update([ "name"=> "mateus" ]);

  $user->delete();

  $user = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
  $user->save();

  User::remove($user->id);

  $results = User::find();

  echo json_encode($results);
?>