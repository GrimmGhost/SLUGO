<?php
session_start();

$GLOBALS['config'] = array
(
    /*'mysql'=>array
    (
        'host'=>'108.242.191.22',
        'username'=>'xghostx_ghost',
        'password'=>'echo2831',
        'db'=>'xghostx_acm_slugo'
    ),*/
   /* 'mysql'=>array
(
    'host'=>'localhost',
    'username'=>'root',
    'password'=>'',
    'db'=>'acm_slugo'
),*/
    'mysql'=>array
    (
        'host'=>'localhost',
        'username'=>'root',
        'password'=>'',
        'db'=>'acm_slugo'
    ),
    'remember'=> array
    (
        'cookie_name' =>'hash',
        'cookie_expiry'=> 604800
    ),
    'session'=> array
    (
        'session_name'=>'user',
        'token_name' => 'token'
    )
);

spl_autoload_register(function($class) {
    require_once '../login/classes/' . $class . '.php';
});

require_once '../login/functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name'))&& !Session::exists(Config::get('session/session_name')))
{
    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('users_session',array('hash', '=',$hash));

    if($hashCheck ->count())
    {
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}