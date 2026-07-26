<?php
class DefaultController 
{
    public function index() 
    {
        $meta = ['title' => 'Hello, World!'];

        require_once ROOT . '/views/Blank.php';
    }
}
?>