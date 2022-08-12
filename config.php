<?php
/*autoload para utilizar os namespaces*/
spl_autoload_register(function($nameclass){
    $dirClass = 'class';
    //$filename = $dirClass. DIRECTORY_SEPARATOR . $nameclass . ".php";
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameclass . ".php");

    if (file_exists($filename)){
        require_once($filename);
    }
});