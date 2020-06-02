<?php

use Pages\Page;
use Models\Article;

class Bootstrap
{
    static public function init()
    {
        $action = 'index';
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
        }

        switch ($action) {
            case 'index':
                $page = new Page();

                $article = new Article();
                $articles = $article->all();
                $page->articles->$article;
                $page->render('index');
                break;
            case 'create':
                $page = new Page();
                $page->render('create');
                break;
            case 'store':
                $title = filter_input(INPUT_POST, 'title');
                $text = filter_input(INPUT_POST, 'text');
                //todo validations with errors
                $article = new Article();
                $article->create($title, $text);
                self::redirect('index');
                break;
            case 'delete':
                break;
        }
    }

    static public function redirect($action)
    {
        header('Location:' . $_SERVER['PHP_SELF'] . '?action=' . $action);
    }
}