<?php require_once(dirname(__FILE__)."/index.php"); 

  class User {
    public $fields;
    public $id;

    public function __construct($fields) {
        $this->fields = [
          "name" => $fields["name"],
          "email" => $fields["email"]
        ];
    }

    static function find () {
      global $conn;

      $stmt = $conn->prepare("SELECT * FROM db_users");

      $stmt->execute();
    
      return $stmt->fetchAll();
    }
  
    public function save () {
      global $conn;
      $stmt = $conn->prepare("INSERT INTO db_users (name, email) VALUES(:name, :email)");
    
      foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);

      $stmt->execute();

      $this->id = (int)$conn->lastInsertRowID();
    }

    public function update ($update) {
      global $conn;

      $stmt = $conn->prepare("UPDATE db_users SET name = :name, email = :email WHERE _id = :id");
    
      $this->changeFields($update);

      $stmt->bindParam("id", $this->id);

      foreach ($this->fields as $key => &$val) $stmt->bindParam($key, $val);
    
      $stmt->execute();
    }

    public function delete () {
      global $conn;

      $stmt = $conn->prepare("DELETE FROM db_users WHERE _id = :id");
    
      $stmt->bindParam("id", $this->id);

      $stmt->execute();
    }

    static function remove ($id) {
      global $conn;

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