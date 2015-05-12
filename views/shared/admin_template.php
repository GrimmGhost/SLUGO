<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 2/27/2015
 * Time: 12:28 PM
 */

$user = new User();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>SLUGO -</title>

    <!-- links must be from root directory
     when the template is called it gets added to the view that called it
and files start getting referenced from there-->

    <link rel="stylesheet" href="../content/css/bootstrap.min.css">
    <link rel="stylesheet" href="../content/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../content/css/slugoNEW.css">
    <link rel="stylesheet" href="../content/css/hover-min.css">
	<link rel="stylesheet" href="../content/css/ionicons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../content/js/bootstrap.min.js"></script>
    <script src="../content/js/bracket2.js"></script>
    <link rel="stylesheet" href="../gallery/gallery.css">
</head>
<body>
<div class="page">
    <nav class="navbar navbarBackColorAdmin navbar-static-top">
        <div class="navbarReposition">
            <header class="">
                <!-- references must be called from root -->
                <a class="navbar-brand" href="../views/home.php">SLUGO</a>
            </header>
            <ul class="nav navbar-nav" id="links">
                <li><a>ADMIN PANEL</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbarUser " id="selu">
                <li class ="dropdown navbarUserName">
                    <?php if($user->isLoggedIn()){?>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <?php echo escape($user->data()->username); ?>
                            <ul class="dropdown-menu" role="menu">

                                <li><a class="userBarMenuHover" href="../views/account.php">Account</a></li>
                                <li><a class="userBarMenuHover" href="../login/logout.php">Log out</a></li>

                            </ul>
                        </a>
                    <?php }else{?>
                <li><a href="../views/login.php" class="loginUser hvr-underline-reveal" id="login">Login</a></li>
                <li><a href="../views/register.php" class="hvr-underline-reveal" id="login">Register</a></li>
                <?php }?>
                </li>

            </ul>
        </div>
    </nav>
    <div id="dimScreen" class="contentPage">
        <ul class= navBarVerticalAdmin>
            <li><a href=""><i class="ion-stats-bars"></i></a></li>
            <li><a href=""><i class="ion-ios-game-controller-b"></i></a></li>
            <li><a href=""><i class="ion-person"></i></a></li>
            <li><a href=""><i class="ion-document-text"></i></a></li>
            <li><a href=""><i class="ion-ios-camera"></i></a></li>
            <li><a href="../views/addACMMembers.php"><i class="ion-person"></i></a></li>
            <li><a href=""><i class="ion-information-circled"></i></a></li>
            <li><a href="">DB</a></li>
        </ul>
        <nav class="navbarContentBar navbarBackColorContentBar">
            <div class="input-group  input-group-sm col-md-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon">
            </div>
        </nav>

        <div class="AdminContainer">

        <?php require_once($page); ?>
            <div class="">
                <p></p>
            </div>
        </div>
</div>
</div>
</body>
</html>