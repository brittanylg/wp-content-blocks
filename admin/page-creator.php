<?php

namespace brittanylg\WordPress;

add_action('adminutility-pagecreator-init', function($pageCreator){ 
    foreach (scandir(__DIR__.'/post-types/') as $file) {
        if (in_array($file, array('.','..'))) continue;
        $fullpath = __DIR__.'/post-types/'.$file;
        if (file_exists($fullpath) && !is_dir($fullpath)) {
            $pageCreator->addPostType($fullpath);
        }   
    }
}, 20);  

spl_autoload_register(function($class) {
    $prefix = __NAMESPACE__;
    $base_dir = dirname(__FILE__).'/src';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

ContentBlocks::addShortcode();