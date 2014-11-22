<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends \Nette\Object {

    /** @var \DibiConnection */
    private $db;
    private $table = "deset1";

    public function __construct(\DibiConnection $connection) {
        $this->db = $connection;
    }

    public function findAll() {
        return $this->db->select('*')->from($this->table);
    }
}