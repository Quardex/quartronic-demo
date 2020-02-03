<?php

namespace app\qcontrollers;

class SiteController extends \quarsintex\quartronic\qcore\QController
{
    function actIndex()
    {
       self::$Q->render->run('site/index');
    }
}

?>