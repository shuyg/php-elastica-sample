<?php

function __autoload_elastica($class)
{
    $path = str_replace('_', '/', $class);

    if (file_exists('./' . $path . '.php')) {
        require_once('./' . $path . '.php');
    }
}

spl_autoload_register('__autoload_elastica');

$elasticaClient = new Elastica_Client(array(
    'url' => 'https://api.searchbox.io/api-key/PUT_YOUR_API_KEY_HERE',
));

/*
    $elasticaClient = new Elastica_Client(array(
    'url' => 'http://localhost:9200',
));
 */

?>