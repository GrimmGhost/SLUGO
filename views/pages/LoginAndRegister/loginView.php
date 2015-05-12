<p>we made it</p>
<div>
    <form action="" method="post">
        <div class="field">

            <label for="username">Username:</label>
            <div>
                <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" >
                <span class="error"><?php echo $validationError ?></span>
            </div>
        </div>
        <?php echo "<script> alert('we made it')</script>" ?>

        <div id="password" class="field">

            <label for="password">Password: </label>
            <div id = "fix1">
                <input type="password" name="password" id="password" autocomplete="off" placeholder="Password">

            </div>
        </div>

        <div class="field">
            <label for="remember">
                <input type="checkbox" name="remember" id="remember"> Remember me
        </div>

        <input type="hidden" name="token" value="<?php //echo Token::generate(); ?>">
        <input type="submit" value="Log in">
    </form>
</div>