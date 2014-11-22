<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Model;

class Databe extends Nette\Object implements Nette\Security\IAuthenticator
{

public function getPage($id)
{
    // get content of page with the given id
    return $this->context->database->table('obsahstranek')
        ->where('id', $id)
        ->fetch();
}
}