<?php
class DefaultController 
{
    public function index() 
    {
        $meta = ['title' => 'AEON'];

        require_once ROOT . '/views/Home.php';
    }
}
?>