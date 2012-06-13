<?php
//This is an standalone implmementation of Hermes

//Configs
$ScrollDir = 'Scrolls';

//Include Hermes
require 'Hermes.php';
//New Hermes Only one needed per ScrollDir but you can make as many as you want
$Hermes = new Hermes($ScrollDir);

if(!isset($_GET['namespace'])||!isset($_GET['function'])||!isset($_GET['variables']))
{
	die();
}
$RequestNameSpace = $_GET['namespace'];
$RequestFunction = $_GET['function'];
$RequestVariables = $_GET['variables'];

$Variables = json_decode($RequestVariables);

echo $Hermes->call($RequestNameSpace,$RequestFunction,$Variables);
?>
