<?php
require_once 'core/init.php';
require_once '../data/IncludesNeeded.php';


$user = new User();
if($user->isLoggedIn())
{
    Redirect::to('../views/home.php');
}
else
{
    $validationError = "";
    $username = "random";
    if (Input::exists()) {
        if (Token::check(Input::get('token'))) {
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'username' => array('required' => true),
                'email' => array('required' => true)
            ));

            $user = new User();

            if ($validation->passed()) {
                //log user in
                $user = new User();
                $email = Input::get('email');
                $username = Input::get('username');
                $login = $user->forgotPass(Input::get('username'),$email);
                $data = $user->data();



                if($login && ($email == $data->email))
                {
                    try {
                    $user = new User();
                    $user->update(array(
                        'resetPassCode' => md5($username.microtime())
                    ));
                    } catch (Exception $e)
                    {
                        die($e->getMessage());
                    }
                        resetPassMail();
                        $user->logout();
                        Redirect::to('../views/email.php');

                }
                else
                {
                    $validationError= 'Sorry email or username does not exist';
                }

            } else {
                $bulkErrors = " ";
                foreach ($validation->errors() as $errors) {
                    // echo $errors,'<br>';
                    $space = '<br>';
                    $bulkErrors .= $errors . $space;
                }
                $validationError = $bulkErrors;


            }
            //}
        }
    }
}
//require_once"html/forgotPasswordView.php";