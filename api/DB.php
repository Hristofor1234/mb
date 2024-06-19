<?php
namespace App;

use mysqli;

class DB {

    public $link;

    public function __construct() {
        $this->link = new mysqli("localhost", "root", "", "mb");
    }

    public function get_all_auto() {
        return $this->link->query("SELECT * FROM `avto`");
    }

    public function get_single_auto($id) {
        return $this->link->query("SELECT * FROM `avto` WHERE `Id` = $id")->fetch_assoc();
    }


}