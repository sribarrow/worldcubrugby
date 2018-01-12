<?php
    include 'Models/Credentials.php';
   // include 'Models/ShopModel.php';
   // include 'Entities/ShopEntity.php';
   include_once 'Controller/ShopController.php'; 
    session_start();
    $shopController = new ShopController();
     $isActive = "posts";

    $title="Shop";
    $year = "2018";
    $content=$shopController->ShowPosts();
    include 'Template.php';
