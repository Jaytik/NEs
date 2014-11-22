<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class BaseModel extends App\Model
{
static public $database;

static function init($database) {
self::$database = new Nette\Database\Connection(
        $database->dsn, $database->user, $database->password);
}
}