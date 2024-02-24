<?php

class DBModel {

    protected $db = null;
    protected $connected = false;

     public function __construct() {
        $this->connected = $this->connect_to_db();
     }

    private function connect_to_db() {   
        $engine='mysql';
        $host = 'localhost';
        $dbname = 'tai_frog';
        $user = 'tai_frog';
        $pwd = 'A6495AVLXR';

        try {
            $this->db = new PDO($engine.':host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pwd, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return true;
        }
        catch (Exception $e) {
            print_r($e);
            return false;
        }
    }
}
