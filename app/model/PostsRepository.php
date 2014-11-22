<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PostsRepository extends Repository {
 
public function fetchAll() {
 return $this->connection->table('posts')
 ->order('date DESC');
 }
}
