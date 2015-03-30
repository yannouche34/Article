<?php
/**
 * Created by PhpStorm.
 * User: Yannouche
 * Date: 30/03/2015
 * Time: 09:59
 */
use Article\ArticleManager;
use Framework\Types\Chaine;

$manager = new ArticleManager();

if(isset($_GET['article_id']) && is_int($_GET['article_id'])){
    $displayer->assign('article', $manager->getArticleById($_GET['article_id']));
}

if(isset($_POST['article_form_validate'])){
    if(!isset($_POST['title'], $_POST['author'], $_POST['content'])){
        $displayer->message('fail', 'Article non complet');
    }
    else{
        $article = (!empty($_POST['article_id'])) ? $manager->getArticleById($_POST['article_id']) : $article = $manager->getEntity('article');

        $article->title = $_POST['article_title'];
        $article->author = $_POST['article_author'];

        if(is_null($article->systemTitle)){
            $article->systemTitle = Chaine::systemize($article->title);
        }

        $article->clearContents();

        foreach($_POST['article_contents'] as $content){
            $content = $manager->getEntity('content');


            $article->addContent($content);
            unset($content);
        }

        $article->write();
        $displayer->message('success', 'article édité avec succès');

        header('location: index.php?page=article_edit&id=' . $article->id);
    }
}