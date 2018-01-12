<?php
/**
 * Description of ShopModel
 *
 * @author sripriya
 * 
 */

class ShopModel extends Credentials{
    
    protected function validateUser($usr, $pwd){
         //$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        $sql = "SELECT * FROM users WHERE email='" . $usr . "' and password='" . $pwd . "'";
        echo $sql;
        $result = $this->connectDb()->query($sql);
       
            return $result;
        
        }
    
    
    protected function getUniqueSizes(){
        $sql= "select distinct size from shopitems";
        $result = $this->connectDb()->query($sql);
        
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    
     protected function getItemsBySize($size){
        $sql= "select * from shopitems where size LIKE '$size'";
        //echo $sql;
        $result = $this->connectDb()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    protected function getUniqueDates(){
         $sql= "select distinct matchDate, fixtureType from fixtures";
        //echo $sql;
        $result = $this->connectDb()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        
    }
    
    protected function getLatestposts(){
         $sql= "SELECT * FROM `posts` 
            order by insertedon desc 
            LIMIT 10";
        //echo $sql;
        $result = $this->connectDb()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        
    }
    
    protected function getAllFixtures(){
         $sql= "SELECT distinct `matchDate`, `fixtureType`, `countryA`, `countryB`, fields.fieldName, a.flag as flagA, b.flag as flagB 
            FROM `fixtures`, country a, country b, fields
            WHERE
            fixtures.countryA = a.countryName
            AND fixtures.countryB = b.countryName
            AND fields.fieldId = fixtures.fieldId
            order by matchDate";
        //echo $sql;
        $result = $this->connectDb()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
                //echo $row;
            }
            return $data;
        }
    }
    
   
}