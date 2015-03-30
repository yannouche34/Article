<?php
/**
 * Created by PhpStorm.
 * User: Yannouche
 * Date: 30/03/2015
 * Time: 09:59
 */
use Article\ArticleManager;

if(isset($_GET['article_id']) && is_int($_GET['article_id'])){
    $manager = new ArticleManager();
    $article = $manager->getArticleById($_GET['article_id']);
    $article->delete();
}