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

<?php  include "includes/head.php";?>

<body>
    <?php include "includes/user_nav.php"; ?>
    <main>
        <div class="container">
            <div class="page-header">
                <h1>Hello, <?php echo escape($user->data()->username);?></h1>
                <h1>Welcome to the User Area</h1>
            </div>
            <form action="" method="post">
            <div class="col-md-3 details">
                <h2>Personal Details</h2>
                    <input name="id" type="hidden" value="<?php echo escape($user->data()->id);?>"> 
                    Full Name:<br>
                    <input name="name" class="form-control" type="text" value="<?php echo $user->data()->name;?>">
                    Username:<br>
                    <input name="username" class="form-control" type="text" value="<?php echo $user->data()->username;?>">
                    Current Password:<br>
                    <input type="password" class="form-control" name="password_current" id="password_current"/>
                    New Password:<br>
                    <input type="password" class="form-control" name="password_new" id="password_new"/>
                    New Password again:<br>
                    <input type="password" class="form-control"name="password_new_again" id="password_new_again"/>
                    
                    </form>
                        <br>
                        <button name="button" class="btn btn-primary" type="submit" value="Change">Update</button>
                        <input type="hidden" name="token" value="<?php echo Token::generate();?>"/>
                        <br><br>
                        <p>You can update any of the information on this page </p>
                    <p>Only alter the information you need to leave all other 
                        ields as displayed if you change your mind then navigate 
                        away from the page and no changes will take place</p>
            </div>
            
            <div class="col-md-3 details">
                <h2>Company Details</h2>

                <form action="update.php" method="post">
                    <input name="id" type="hidden" value="<?php echo escape($user->data()->id);?>">
                    <input name="user_id" type="hidden" value="<?php echo escape($user->data()->id);?>">
                    Company name: 
                    <input name="bus_name" class="form-control" value="" type="text">
                    
                    Number:<br>
                    <input name="address_no" class="form-control" value="" type="text">
                    
                    Address:<br>
                    <input name="address_road" class="form-control" value="" type="text">
                    
                    Post Code:<br>
                    <input name="address_pc" class="form-control" value="" type="text">
                    
                    Contact No:<br>
                    <input name="contact_no" class="form-control" value="" type="text">
                    
                    Business No:<br>
                    <input name="business_no" class="form-control" value="" type="text">
                    
                    Website URL:<br>
                    <input name="website" class="form-control" value="" type="text">
                    
            </div>
            <div class="col-md-3 details">
                <h2>Company Description</h2>
                <p>Enter your companys information max 250 characters</p>
                    <div id="upload_form">
                        
                        <textarea name="description" cols="25" class="form-control" value="" rows="15"></textarea>
                        <br>
                        <em>Max 250 characters</em>
                        <br>

                        <p>Upload Company Image</p><label for=
                        "file" name="file">Filename:</label> <input id="file" name="file"
                        type="file"><br>
                        
                    </div>
            </div>
        <div class="col-md-3 details">
            <h2>Price Plan</h2>
            
                <input name="prem" type="radio" value="prem">Premium<br>
                
                <p>Price £50 per Month</p><br>
                <input name="stand" type="radio" value="stand"> Standard<br>
               
                <p>Price £10 per Month</p><br>
                
            <div class="col-md-12">
                <button name="button" class="btn btn-primary" type="submit" value="Submit">Submit</button>
                <input type="hidden" name="token" value="<?php echo Token::generate();?>"/>
                
        </form>
                
            </div>
        </div>
    
        </div><!-- container -->
        <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </main><!-- end main -->

    <?php  include "includes/footer.php";?>