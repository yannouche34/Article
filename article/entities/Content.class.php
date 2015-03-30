<?php
namespace Article\Entities;

use Framework\Database\AbstractEntity;
use Framework\Database\Relation;
use Framework\Database\Mapping;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Content extends AbstractEntity {
    public $article;
    public $id;
    public $position;
    
    public function __construct(){
        parent::__construct();
        
        $this->setTableName('content');
        $this->setIdAttribute('id');
        
        $this->fieldsMapping->addItem(new Mapping('article', 'article_id'));
        
        $this->relations->addItem(new Relation(Relation::MANY_TO_ONE, 'Test\TestEntity', 'contents', 'article'));
    }
}