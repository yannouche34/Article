<?php
namespace Article;

use Framework\AbstractClass\AbstractController;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ArticleController extends AbstractController{
    public function __construct(){
        $this->setManager(new ArticleManager());
        
        parent::__construct();
    }
    
    public function edit($data = NULL){
        $this->setPage('articleEdit');
        
    }
    
    public function delete($articleId){
        $this->setPage('articleCreate');
        
    }
    
    public function read($articleId){
        $this->setPage('articleCreate');
        
    }
    
    public function index(){
        
    }
}

