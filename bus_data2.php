<?php
require_once 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validation = new Validation();

        $validation = $validation->check($_POST, array(
            'bus_name'  => array(
                'required' => true,
                'min'      => 2,
                'max'      => 50
            )
        ));

        if($validation->passed()){
            try{
                $business_data->update(array(
                    'bus_name'  => Input::get('bus_name')
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

?>

<form action="" method="post">
    <div class="field">
        <label for="bus_name">Name</label>
        <input type="text" name="bus_name" id="bus_name" value=""/>

        <input type="submit" value="Update"/>
        <input type="hidden" name="token" value="<?php echo Token::generate();?>"/>
    </div>
</form>