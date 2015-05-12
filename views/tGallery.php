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
$pageTitle = "tGallery";
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


$page = "../views/pages/Media/tGalleryView.php";
//require_once '../login/contact.php';
//$leftSideBar = "shared/sideBars/leftSideBar.php";
include "shared/galleryTemplate.php";