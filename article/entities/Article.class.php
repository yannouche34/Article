<?php
namespace Article\Entities;

use Framework\Database\AbstractEntity;
use Framework\Database\Relation;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Article extends AbstractEntity {
    public $id;
    public $title;
    public $systemTitle;
    public $author;
    public $contents;
    
    public function __construct(){
        parent::__construct();
        
        $this->setTableName('article');
        $this->setIdAttribute('id');
        
        $this->relations->addItem(new Relation(Relation::ONE_TO_MANY, 'Article\Content', 'article', 'contents'));
        $this->fieldsMapping->addItem(new Mapping('systemTitle', 'system_title'));
    }

    public function addContent(Content $content){
        $this->contents->addItem($content);
    }

    public function removeContent($position){
        $this->contents->removeItem($position);
    }

    public function clearContents(){
        $this->contents->clear();
    }
}

