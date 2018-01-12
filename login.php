<?php
    include 'Models/Credentials.php';
   include_once 'Controller/ShopController.php'; 
    
    $shopController = new ShopController();
     $isActive = "login";
  
  if(isset($_POST['submit']))
    {
       $username = $_REQUEST['email'];
       $password =  $_REQUEST['password'];
       $shopController->CheckUser($username, $password);
    }   
    else 
    {
        //Page is loaded for the first time, no type selected -> Fetch all types
       //$shopTable = $shopController->CreateShopTable('%');
      echo "nothing";
    }
    
    $title="Shop";
    $year = "2018";
    
    $content= "<div class='container'><form action = '' method = 'post' >" .
            "<label><b>Email</b></label>" .
            "<input type='text' placeholder='somename@example.com' name='email' required>" .
            " <label><b>Password</b></label>
               <input type='text' placeholder='Enter Password' name='password' required>" .      
            "<button name='submit' >Login</button>" .
            "</form><p id='regp'>Not registered yet? <a href='registration.php'>Register Here</a></p></div>";
    
    include 'Template.php';
