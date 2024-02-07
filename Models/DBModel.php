<?php

class DBModel {

    protected $db = null;
    protected $connected = false;

     public function __construct() {
        $this->connected = $this->connect_to_db();
     }

    private function connect_to_db() {   

        try {
            $this->db = new PDO('mariadb:host=localhost;dbname=lego_web_site;charset=utf8', 'root', '');
            return true;
        }
        catch (Exception $e) {
            return false;
        }
    }
}
