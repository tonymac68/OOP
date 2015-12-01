<?php

ini_set("display_errors", 1);
error_reporting(E_ALL); 

session_start();

$GLOBALS['config'] = array(
    'mysql' => array(               /* database connection string */
        'host'      => 'localhost',
        'username'  => 'root',
        'password'  => '',
        'db'        => 'business'
    ),
    'remember'  => array(
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name'  => 'user',
        'token_name'    => 'token'
    )
);

spl_autoload_register(function($class){
   require_once 'classes/'.$class.'.php';
});

require_once 'functions/sanitize.php';
require_once 'functions/general.php';

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
    $hash = Cookie::get(Config::get('remember/cookie_name'));

    $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

    if($hashCheck->count()){
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}


