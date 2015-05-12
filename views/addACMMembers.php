<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 3/1/2015
 * Time: 7:47 PM
 */
//database stuff
//
//
$pageTitle = "ADMIN";
require_once ('../data/databaseConnect.php');
require_once ('../data/Admin/addACMMembers.php');
require_once '../data/IncludesNeeded.php';
//
//
$page = "pages/Admin/addACMMembersView.php";
//$sideBar = "shared/sideBars/sideBar.php";
include "shared/admin_template.php";