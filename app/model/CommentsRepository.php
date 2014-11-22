<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CommentsRepository extends Repository {
 
public function fetchArticleComments($post_id) {
 return $this->connection->table('comments')
 ->where('post_id = ?', $post_id);
 }
}
