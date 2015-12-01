<?php

ini_set("display_errors", 1);
error_reporting(E_ALL); 


require_once 'core/init.php';

if(Input::exists()){

    if(Token::check(Input::get('token'))){
        $validation = new Validation();
        $validation->check($_POST, array(
            'username'  => array('required' => 'true'),
            'password'  => array('required' => 'true')
        ));

        if($validation->passed()){
            $user = new User();

            $remember = (Input::get('remember') === 'on')? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);
            if($login){
                Redirect::to('user.php');
                return false;
            }else{
                echo '<p>Sorry, Logged in failed</p>';
                return false;
            }
        }else{
            pre($validation->errors());
        }

    } 
        return false;
}

?>

<?php

include 'includes/head.php';

?>
<body>
    <?php include "includes/login_nav.php"  ?>
    <header>
        <div id="inner_header">
            <h3>Welcome to the Business Directory</h3>
        </div>
    </header>

    <div id="main_con">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" autocomplete=""/>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" autocomplete=""/>
                        </div>

                        <div class="checkbox">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember"/> Remember me
                            </label>
                        </div>

                        <input type="hidden" name="token" value="<?php echo Token::generate();?>"/>

                        <button type="submit" value="Login" class="btn btn-primary">Submit</button>
                    </form>

</div><!--  main con -->

    <?php  include "includes/footer.php";?>