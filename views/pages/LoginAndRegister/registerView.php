<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 2/27/2015
 * Time: 2:37 PM
 */
?>

<div>
    <form action ="" method="post">
        <div class = "field">
            <label for="username">Username:</label>
            <div id="fix">
                <input type="text" name="username" id="username" value="<?php //echo escape(Input::get('username')); ?>" autocomplete ="off" placeholder="Username">
            </div>
        </div>

        <div class="field">
            <label for="password">Choose a password:</label>
            <div id="fix">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
        </div>

        <div class="field">
            <label for="password_again">Retype Password:</label>
            <div id="fix">
                <input type="password" name="password_again" id="password_again" placeholder="Retype Password">
            </div>
        </div>

        <div class="field">
            <label for="name">Your Name:</label>
            <div id="fix">
                <input type="name" name="name" value="<?php // echo escape(Input::get('name')); ?>" id="name" placeholder="Full Name">
            </div>
        </div>
        <div id="fix">
            <input type="hidden" name="token" value="<?php // echo Token::generate(); ?>">
            <input id="alert" type="submit" value="Register">

    </form>
</div>