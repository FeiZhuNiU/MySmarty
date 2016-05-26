<?php
/**
 * Created by PhpStorm.
 * User: 麟
 * Date: 2016/5/26
 * Time: 23:23
 */
// load Smarty library
require('../libs/Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_GuestBook extends Smarty {

    function __construct()
    {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('../guestbook/templates/');
        $this->setCompileDir('../guestbook/templates_c/');
        $this->setConfigDir('../guestbook/configs/');
        $this->setCacheDir('../guestbook/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
    }

}
