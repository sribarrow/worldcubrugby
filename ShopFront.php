<?php
    include 'Models/Credentials.php';
   // include 'Models/ShopModel.php';
   // include 'Entities/ShopEntity.php';
   include_once 'Controller/ShopController.php'; 
    $shopController = new ShopController();
     $isActive = "shop";
     
  if(isset($_POST['size']))
    {
        //Fill page with coffees of the selected type
        $shopTable = $shopController->CreateShopTable($_POST['size']);
    }
    else 
    {
        //Page is loaded for the first time, no type selected -> Fetch all types
       $shopTable = $shopController->CreateShopTable('%');
    }
    $title="Shop";
    $year = "2018";
    $content=$shopController->CreateDropdownList() . $shopTable;
    include 'Template.php';
