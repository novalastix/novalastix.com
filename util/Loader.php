<?php

class Loader
{
    static function raw($file): string
    {
        if(!file_exists($file)) return '';
    
        $content = file_get_contents($file);
        
        return $content;
    }
}
