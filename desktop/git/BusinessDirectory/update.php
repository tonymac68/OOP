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

            'id'  => array(
                'required' => true,
                'min'      => 2,
                'max'      => 50
            ),
            'user_id'  => array(
                'required' => true,
                'min'      => 2,
                'max'      => 50
            ),
            'bus_name'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'address_no'  => array(
                'min'      => 1,
                'max'      => 50
            ),
            'address_road'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'address_pc'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'contact_no'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'business_no'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'website'  => array(
                'min'      => 2,
                'max'      => 50
            ),
            'description'  => array(
                'min'      => 2,
                'max'      => 4000
            ),
            'file'  => array(
                'min'      => 1,
                'max'      => 50
            ),
            'prem'  => array(
                'min'      => 1,
                'max'      => 1
            )
        ));

        if($validation->passed()){
               
            try{
                $user->createInfo(array(
                    'id'  => Input::get('id'),
                    'user_id'  => Input::get('user_id'),
                    'bus_name'  => Input::get('bus_name'),
                    'address_no'  => Input::get('address_no'),
                    'address_road'  => Input::get('address_road'),
                    'address_pc'  => Input::get('address_pc'),
                    'contact_no'  => Input::get('contact_no'),
                    'business_no'  => Input::get('business_no'),
                    'website'  => Input::get('website'),
                    'description'  => Input::get('description'),
                    'prem'  => Input::get('prem')
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