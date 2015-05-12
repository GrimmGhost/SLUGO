<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 2/28/2015
 * Time: 4:40 PM
 */

$localhost = "localhost";
$dbuser  = "xghostx_ghost";
$localuser = "root";
$dbpassword =  "";
$localdb = "acm_slugo";

try {
    $conn = new PDO("mysql:host=$localhost;dbname=$localdb", $localuser, $dbpassword);
} catch(PDOException $ex) {
    die('Could not connect to the database:' . $ex);
}