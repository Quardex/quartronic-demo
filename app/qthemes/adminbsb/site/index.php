<?php

$tplDir = __DIR__.'/../../../../vendor/quardex/adminbsb/';
$page = (!empty(self::$Q->request->get['page'])) ? 'pages/'.self::$Q->request->get['page'] : 'index';

ob_start();
include($tplDir . $page . '.html');
$content = ob_get_clean();

echo preg_replace(
    array(
        '/pages\/([^.]*).html/',
        '/index.html/'
    ),
    [
        '?page=$1',
        '',
    ],
    $content
);

?>
