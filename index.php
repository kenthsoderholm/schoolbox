<?php

include('templates/main.tpl.php');
include('templates/page.tpl.php');
include('templates/initial.tpl.php');

$html = array();

$html['head'] = htmlHead();
$html['initial'] = htmlInitial();
$html['foot'] = htmlFoot();

print(implode($html));