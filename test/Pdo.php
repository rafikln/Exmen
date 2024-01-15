<?php

class MaClassePDO {
    public $dbh;

    public function __construct($user, $password, $dsn) {
        try {
            $this->dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

}
?>
