<?php  
require_once 'core/init.php';


if(Session::exists('success')){
    echo Session::flash('success');
}

$user = new User();

if($user->isLoggedIn()){
    
if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validation = new Validation();

        $validation = $validation->check($_POST, array(
            'name'  => array(
                'required' => true,
                'min'      => 2,
                'max'      => 50
            ),
            'username'  => array(
                'required' => true,
                'min'      => 2,
                'max'      => 50
            ),
            'password_current' => array(
                'min'       => 6
            ),
            'password_new' => array(
                'min'       => 6
            ),
            'password_new_again' => array(
                'min'       => 6,
                'matches'   => 'password_new'
            ) 
        ));

        if($validation->passed()){
            
            try{
                $user->update(array(
                    'name'  => Input::get('name'),
                    'username'  => Input::get('username'),
                    'password'  => Hash::make(Input::get('password_new')),
                ));

                Session::flash('success', 'Information Updated Successfully');
                Redirect::to('user.php');

            }catch (Exception $e){
                die($e->getMessage());
            }
        }else{
            pre($validation->errors());
        }
    }
}

    if($user->hasPermission('admin')){
                Session::flash('success', 'Information Updated Successfully');
                Redirect::to('admin.php');
        echo '<p>You are an administratior.</p>';
    }

}


?>