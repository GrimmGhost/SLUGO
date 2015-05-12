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
$aboutDataArray = array();
require_once('../login/classes/DB.php');
require_once ('../data/databaseConnect.php');
require_once ('../data/Info/aboutPageLogic.php');
require_once '../data/IncludesNeeded.php';
//
//
$aboutDatabase = new about_database_files();

$rows = $aboutDatabase->getRows();
$aboutDataArray = $aboutDatabase->getArray();

//$sideBar = "shared/sideBar/sideBar.php";
//$page = "../login/html/contactView.php";
$page = "../views/pages/Info/infoView.php";
//require_once '../login/contact.php';
include "shared/templateNEW.php";