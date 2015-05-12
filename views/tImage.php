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

$pageTitle = "tImages";
$tImageDataArray = array();
$tCategoryDataArray = array();
require_once('../login/classes/DB.php');
require_once ('../data/databaseConnect.php');
require_once ('../data/Media/tImageLogic.php');
require_once '../data/IncludesNeeded.php';
require_once '../data/Media/tGalleryLogic.php';
//
//
$tImageDatabase = new tImage_database_files;
$tCategoryDatabase = new tGallery_database_files;

$rows1 = $tImageDatabase->getRows1();
$rows2 = $tCategoryDatabase->getRows();

$tImageDataArray = $tImageDatabase->getArray1();
$tCategoryDataArray = $tCategoryDatabase->getArray();


$page = "../views/pages/Media/tImageView.php";
include "shared/templateNew.php";
//include "../views/pages/Media/tImageView.php";

