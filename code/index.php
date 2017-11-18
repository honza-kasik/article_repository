<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/code/templates/');
$smarty->setCompileDir('/code/templates_c/');
$smarty->setConfigDir('/code/configs/');
$smarty->setCacheDir('/code/cache/');

$smarty->assign('name','Ned');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('index.tpl');

?>

