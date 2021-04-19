<?php

namespace App\Model\Table;

use \Cake\ORM\Table;

class ArticlesTable extends Table {
    public function initialize (array $config) : void {
        $this->addBehavior('Timestamp'); // automagically populates timestamp (datetime) fields
    }

}