<?php
require_once 'core/init.php';

if(!$username = Input::get('user'))
{
    Redirect::to('index.php');
}
else
{
    $user = new User($username);
    if(!$user->exists())
    {
        Redirect::to(404);
    }
    else
    {
        $data = $user->data();
    }
    ?>

    <center><h3><?php echo escape($data->username); ?></h3>
    <p>Full name: <?php echo escape($data->first_name)?>
        <?php echo escape($data->last_name)?>
    </p>
        <a href="../views/account.php">BACK</a>
    </center>


<?php
}