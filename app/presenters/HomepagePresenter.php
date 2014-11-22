<?php

namespace App\Presenters;
 
use Nette,
        App\Model;
 
class HomepagePresenter extends BasePresenter {

    function getData() {
    return self::$database->table('tabulka');
}
}