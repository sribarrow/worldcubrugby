<?php

    include 'Models/Credentials.php';

   include_once 'Controller/ShopController.php'; 
    session_start();
    $shopController = new ShopController();
     $isActive = "fix";
  
        $fixTable = $shopController->CreateFixtureTable();
    $title="Fixtures";
    $year = "2018";
    $content=$fixTable;
    include 'Template.php';
