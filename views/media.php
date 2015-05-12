<?php
/**
* Created by PhpStorm.
 * User: wilson
* Date: 2/25/2015
* Time: 5:14 PM
*/
//database stuff
//
//
$pageTitle = "Media";
$tGalleryDataArray = array();
require_once('../login/classes/DB.php');
require_once ('../data/databaseConnect.php');
require_once ('../data/Media/tGalleryLogic.php');

require_once '../data/IncludesNeeded.php';
//
//

$tGalleryDatabase = new tGallery_database_files;

$rows = $tGalleryDatabase->getRows();
$tGalleryDataArray = $tGalleryDatabase->getArray();
$wGalleryDataArray = $tGalleryDatabase->getArrayImages();

$page = "pages/Media/wgallery.php";

//$sideBar = "shared/sideBars/sideBar.php";
include "shared/templateNew.php";