<?php
namespace article;

use Framework\AbstractClass\AbstractDisplayer;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ArticleDisplayer extends AbstractDisplayer{
    public function __construct(){
        parent::__construct();
    }
    
    protected function getFile(){
        $fileName = ROOT_PATH . '/cache/cache/test.html';
        return $fileName;
    }
    
    protected function mustGenerateFile(){
        return (filemtime($this->getFile()) < time());
    }
}
