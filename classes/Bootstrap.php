<?php

use Pages\Page;

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
                $page->render('index');
                break;
            case 'create':
                break;
            case 'delete':
                break;
        }
    }
}