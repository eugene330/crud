<?php

namespace Pages;

class Page
{
    public function render ($contentPage){
        include_once 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'default.php';
    }
}