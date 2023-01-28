<?php

include $_SERVER['DOCUMENT_ROOT'].'/app/model/userModel.php';

class UserService{


    public function __construct()
    {
      $dbName = "advertising";
      $dbUser = "root";
      $dbPass = "mysql";

      $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";
      $pdo = new PDO($dsn, $dbUser, $dbPass);
    }

    public function getAllUsers()
    {
      $dbName = "advertising";
      $dbUser = "root";
      $dbPass = "mysql";

      $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";
      $pdo = new PDO($dsn, $dbUser, $dbPass);
        $users = array();
        $sql = "SELECT * FROM user ORDER BY id DESC";
        $query = $pdo -> query($sql);
        $records = $query -> fetchAll(PDO::FETCH_ASSOC);

        foreach($records as $row){
          //echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";

            $user = new User();
            $user->set_name($row["name"]);
            $user->set_id($row["id"]);

              $users[] = $user;
        }

        return $users;
    }

}

?>