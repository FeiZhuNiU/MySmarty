<?php
/**
 * Created by PhpStorm.
 * User: 麟
 * Date: 2016/5/26
 * Time: 22:53
 */
require "../include/setup.php";
$smarty = new Smarty_GuestBook();
$smarty->assign('name','Eric');
$smarty->display('index.tpl');