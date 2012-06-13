<?php
//This is an standalone implmementation of Hermes

//Configs
$ScrollDir = 'Scrolls';

require 'Hermes.php';
$Hermes = new Hermes($ScrollDir);
echo $Hermes->call('DemoActions','test',array('Text' => 'Nothing'));

?>
