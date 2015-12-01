<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);


require_once 'core/init.php';

if(Input::exists()){
    if(Token::check(Input::get('token'))) {

        $validate = new Validation();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'password' => array(
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            )
        ));

        if ($validation->passed()) {
            
            $user = new User();

            try{
                $user->create(array(
                    'username'  => Input::get('username'),
                    'password'  => Hash::make(Input::get('password')),
                    'name'      => Input::get('name'),
                    'groups'    => 1
                ));
            }catch (Exception $e){
                die($e->getMessage());
            }
            echo 'passed';
            Session::flash('success', 'You have successfully registered.');
            Redirect::to('index.php');
        } else {
            pre($validation->errors());
        }
    }
}

?>

<?php  include "includes/head.php";?>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <ul class="nav navbar-nav col-md-12">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>

                <li>
                    <a href='login.php'>Login</a>
                </li>

                <li>
                    <a href='register.php'>Register</a>
                </li>

            </ul>
        </div>
    </nav>
    <header>
        <div id="inner_header">
            <h3>Welcome to the Business Directory</h3>
        </div>
    </header>

    <div id="main_con">

<form action="" method="post">
    <div class="form-group">
        <label for="username">Username</label>

        
        <input type="text" name="username" class="form-control"  id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off"/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control"  name="password" id="password" value="" autocomplete="off"/>
    </div>

    <div class="form-group">
        <label for="password_again">Retype Password</label>
        <input type="password" class="form-control"  name="password_again" id="password_again" value="" autocomplete="off"/>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control"  name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" autocomplete="off"/>
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>

    <button type="submit" class="btn btn-primary" value="Register">Submit</button>
</form>

</div><!--  main con -->

    <?php  include "includes/footer.php";?>