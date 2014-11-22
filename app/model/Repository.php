<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Repository extends Nette\Object {
 
/** @var Nette\Database\Context */
 protected $connection;
 
public function __construct(Nette\Database\Context $db) {
    $this->connection = $db;
 }
}

