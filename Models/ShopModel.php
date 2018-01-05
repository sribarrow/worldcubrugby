<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopModel
 *
 * @author sripriya
 * 
 */
require ("Entities/ShopEntity.php")
class ShopModel {
    //put your code here
    function GetShirtSizes(){
        require 'Credentials.php';
        
        // Open DB and fetch data
        
        mysql_connect($host, $user, $password) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("select distinct size from shopitems");
        
        $sizes = array();
        
        //Add database values to array
        while($row = mysql_fetch_array($result)){
            array_push($sizes,$row[0]);
        }
        
        //Close connection
        
        mysql_close();
        return $sizes;
    }
    
    function GetShirtsBySize($size){
        require 'Credentials.php';
        
        // Open DB and fetch data
        
        mysql_connect($host, $user, $password) or die(mysql_error());
        mysql_select_db($database);
        
        $query = "select * from shopitems where size like '$size'";
        $result = mysql_query($query) or die(mysql_error());
        $coffeeArray = array();
        
        //Get data from database
        while($row =  mysql_fetch_array($result)){
            $name= $row[1];
            $type=$row[2];
            $price=$row[3];
            $size=$row[4];
            $country=$row[5];
            $image=$row[6];
            $description=$row[7];
            
            //create new entity instance
            $shop = new ShopEntity(-1,$name, $type, $price,$size,$country, $image,$description);
            array_push($shopArray,$shop);
     
        }
        
           //Close
            mysql_close();
            return $shopArray;
    }
}
