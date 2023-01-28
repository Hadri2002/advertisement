<?php

include $_SERVER['DOCUMENT_ROOT'].'/app/model/advertisementModel.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/model/userModel.php';


class AdvertisementService{


    public function __construct()
    {
      $dbName = "advertising";
      $dbUser = "root";
      $dbPass = "mysql";

      $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";
      $pdo = new PDO($dsn, $dbUser, $dbPass);
    }

    public function getAllAdvertisements()
    {
      $dbName = "advertising";
      $dbUser = "root";
      $dbPass = "mysql";

      $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";
      $pdo = new PDO($dsn, $dbUser, $dbPass);
        $advertisements = array();
        $sql = "SELECT user.id, user.name, advertisement.title, advertisement.id AS \"advertid\", advertisement.userid  FROM advertisement, user WHERE user.id = advertisement.userid ORDER BY advertisement.id DESC";
        $query = $pdo -> query($sql);
        $records = $query -> fetchAll(PDO::FETCH_ASSOC);

        foreach($records as $row){

            $advert = new Advertisement();
            $advert->set_title($row["title"]);
            $advert->set_id($row["advertid"]);

            $user = new User();
            $user->set_name($row["name"]);
            $user->set_id($row["id"]);
            $advert->set_user($user);

            $advertisements[] = $advert;
        }

        return $advertisements;
    }

}

?>