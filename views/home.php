<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 3/12/2015
 * Time: 12:29 PM
 */

$pageTitle = "Home";
$PicturesArray = array();
require_once '../data/IncludesNeeded.php';
require_once('../login/classes/DB.php');
require_once ('../data/databaseConnect.php');
require_once '../data/Home/moreLogic.php';


$HomeDatabase = new Home_logic;
$rows = $HomeDatabase->getRows();
$PicturesArray = $HomeDatabase->getArray();


//
//



$page = "pages/Home/homeView.php";
include "shared/templateNEW.php";