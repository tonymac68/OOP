<?php

require_once 'core/init.php'; /* included database connection string */

if(Input::exists()){
    if(Token::check(Input::get('token'))) {

        $validate = new Validation();       /* validation of users inputs */
        $validation = $validate->check($_POST, array(           
            'bus_name' => array(
                'required' => true,         /* this denotes a required field */
                'min' => 2,                 /* min char allowed  */
                'max' => 20,                /* max char allowed */
                'unique' => 'business_data' /* */
            ),
            'address_no' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'business_data'
            ),
            'address_road' => array(
                'required' => true,
                'min' => 1,
                'max' => 4,
                'unique' => 'business_data'
            ),
            'address_pc' => array(
                'required' => true,
                'min' => 2,
                'max' => 6,
                'unique' => 'business_data'
            ),
            'contact_no' => array(
                'required' => true,
                'min' => 6,
                'max' => 12,
                'unique' => 'business_data'
            ),
            'business_no' => array(
                'required' => true,
                'min' => 6,
                'max' => 12,
                'unique' => 'business_data'
            ),
            'website' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'business_data'
            ),
            'description' => array(
                'required' => true,
                'min' => 25,
                'max' => 250,
                'unique' => 'business_data'
            ),
            'prem' => array(
                'required' => true,
                'min' => 0,
                'max' => 1,
                'unique' => 'business_data'
            ),
            'stand' => array(
                'required' => true,
                'min' => 0,
                'max' => 1,
                'unique' => 'business_data'
            ),
        ));
            echo '$validation';
        if ($validation->passed()) {

            $user = new User();
            $salt = Hash::salt(32);

            try{  /*  This array holds all the inputted information from the user  */
                $user->create(array(
                    'bus_name'  => Input::get('bus_name'),
                    'address_no'  => Input::get('address_no'),
                    'address_road'  => Input::get('address_road'),
                    'address_pc'  => Input::get('address_pc'),
                    'contact_no'  => Input::get('contact_no'),
                    'business_no'  => Input::get('business_no'),
                    'website'  => Input::get('website'),
                    'description'  => Input::get('description'),
                    'prem'  => Input::get('prem'),
                    'stand'  => Input::get('stand')
                    
                ));
            Session::flash('success', 'You have successfully updated your information.');
            Redirect::to('index.php');

            }catch (Exception $e){
                die($e->getMessage());
            }
            echo 'passed';
            
        } else {
            pre($validation->errors());
        }
    }
}


?>

<form action="" method="post">
    <div class="field form-group">
        <label for="bus_name">Business Name</label>
        <input type="text" name="bus_name" id="bus_name" value="" />
    </div>

    <div class="field form-group">
        <label for="address_no">No</label>
        <input type="text" name="address_no" id="address_no" value="" />
    </div>

    <div class="field form-group">
        <label for="address_road">Road</label>
        <input type="text" name="address_road" id="address_road" value="" />
    </div>

    <div class="field form-group">
        <label for="address_pc">Post Code</label>
        <input type="text" name="address_pc" id="address_pc" value="" />
    </div>
    <div class="field form-group">
        <label for="contact_no">Mobile No</label>
        <input type="text" name="contact_no" id="contact_no" value="" />
    </div>
    <div class="field form-group">
        <label for="business_no">Business No</label>
        <input type="text" name="cbusiness_no" id="business_no" value="" />
    </div>
    <div class="field form-group">
        <label for="website">Website url</label>
        <input type="text field" name="website" id="website" value="" />
    </div>
    <div class="field form-group">
        <label for="description">Description</label><br>
        <textarea name="description" id="description"rows="4" cols="30"></textarea>
    </div>
    <input type="checkbox" name="prem" value="prem" checked>Premium Listing
    <input type="checkbox" name="stand" value="stand">Standard Listing 

    <input type="hidden" name="token" value=""/>
    <br><br>

    <input type="submit" value="submit"/>
</form>