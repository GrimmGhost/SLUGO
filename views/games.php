<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 2/25/2015
 * Time: 5:52 PM
 */
$pageTitle = "Games";
$gameDataArray = array();
// database connections
require_once ('../data/databaseConnect.php');
require_once ('../data/Games/gameLogic.php');
require_once '../data/IncludesNeeded.php';
//

$gameDatabase = new game_database_files();

$rows = $gameDatabase->getRows();
$gameDataArray = $gameDatabase->getArray();

//

$page = "pages/Games/gamesView.php";
//$sideBar = "shared/sideBar/sideBar.php";
require_once "shared/templateNEW.php";