<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 2/25/2015
 * Time: 5:15 PM
 */
//database stuff
//
//
$pageTitle = "Info";
$DevelopersDataArray = array();
require_once('../login/classes/DB.php');
require_once ('../data/databaseConnect.php');
require_once ('../data/Info/DeveloperPageLogic.php');
require_once '../data/IncludesNeeded.php';
//
//
$DevelopersDatabase = new Developer_database_files;

$rows = $DevelopersDatabase->getRows();
$DevelopersDataArray = $DevelopersDatabase->getArray();


$page = "../views/pages/Info/DeveloperView.php";
include "shared/templateNEW.php";