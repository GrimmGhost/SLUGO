<?php
require_once 'core/init.php';


$user = new User();


if($user->isLoggedIn())
{
    Redirect::to('../views/home.php');
}
else
{
    echo '<center><p style="padding-top: 30px"> An email has been sent to your email address.</p></center>';


               // header( "refresh:3;url=../views/login.php" );

}

?>