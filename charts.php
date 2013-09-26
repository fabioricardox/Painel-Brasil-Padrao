<?php
require 'lib/smarty/Smarty.class.php';
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;

// Variável servidor
$smarty->display('charts.tpl');
?>
