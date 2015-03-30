<?php
namespace Article;

use Framework\AbstractClass\AbstractManager;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ArticleManager extends AbstractManager {
    protected $article;
    protected $content;
    
    public function __construct(){
        parent::__construct();
        $this->addEntity('article', 'Article\\Entities\Article');
        $this->addEntity('content', 'Article\\Entities\Content');
    }
}