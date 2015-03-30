<?php
/**
 * Created by PhpStorm.
 * User: Yannouche
 * Date: 30/03/2015
 * Time: 09:59
 */
use Article\ArticleManager;

$manager = new ArticleManager();

$list = $manager->findAllArticle();

foreach ($list as &$article){
    $article = $article->toArray();
}

$displayer->assign('articleList', $list);