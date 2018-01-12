<?php
session_start();
/**
 * Description of ShopController
 *
 * @author sripriya
 */

require 'Models/ShopModel.php';

class ShopController extends ShopModel{ 
    
    
    function CheckUser($user, $pwd) {
        echo $user . "/" . $pwd;
        
        $datas = $this->validateUser($user,$pwd);
        if($datas){
            $result = $datas->num_rows;
            if($result==1){
                foreach($datas as $data){
                     $username = $data['username'];
                     $_SESSION['username'] = $username;
                    // echo $username;
                }
                header("Location: index.php"); // Redirect user to index.php
            }else{
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            }   
        }
    }
    
    private function FillDropdownList(){
        $datas = $this->getUniqueSizes();
        $result = "";
        foreach($datas as $data){
            //echo $data['size'];
            $result = $result . "<option value='" . $data['size'] . "'>" . $data['size'] . "</option>";
        }
        return $result;
    }
    
     function CreateDropdownList() {
        $result = "";
         $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a Size: 
                    <select name = 'size' >
                        <option value = '%' >All</option>
                        " . $this->FillDropdownList() .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form> <br/>" ;

        return $result;

    }
    
    function CreateShopTable($size) {
        $result = "";
         $result = "<table style='overflow-x:auto;'>
                        " . $this->FillShopList($size) .
                   "</table>";

        return $result;

    }

    function FillShopList($size){
        $datas = $this->getItemsBySize($size);
        $result = "";
        
        foreach($datas as $data){
            //echo $data['size'];
            $result = $result . "<tr><th width = '150px' ><img runat = 'server' src = '". $data['image']. 
                     "' /></th><th width = '75px' >Name: </th>
                     <td width='150px'>" . $data['name'] . "</td><td><input type='button' value='Buy' onclick='alertUpdate();'></td></tr>";
        }
        return $result;
    }
    
    function ShowPosts(){
        $datas = $this->getLatestposts();
        $result = "";
        
        foreach($datas as $data){
            //echo $data['size'];
            $result = $result . "<div><p><strong>" . $data['postTitle'] . "</strong></p>" .
                    "<p>" .$data['postDescription'] . "</p></div>";
        }
        return $result;
    }
    
      function CreateFixtureTable() {
        
        $result = $this->FillFixtureList() . "</table>";
  
        return $result;

    }

    function FillFixtureList(){
        $dates = $this->getUniqueDates() ;
        $datas = $this->getAllFixtures();
        $result = "";
        
        foreach ($dates as $date){
         $result = $result . "<table width = '85%' style='border: 1px solid black; text-align:center; overflow-x:auto;'  ><tr><th  >" . $date['matchDate']. " (" . $date['fixtureType']. ")</th></tr></table><br />" ;
         
         $result = $result . "<table align=center style='font-size: 1rem;'>";
        foreach($datas as $data){
            //echo $data['size'];  
            if ($date['matchDate'] == $data['matchDate']){
            $result = $result . "<tr><td colspan='4'></td></tr><tr><td  >" . $data['countryA'] . "</td>" .
                    "<td><img height=50 width=50 runat = 'server' src = '". $data['flagA']. "' /></td>" .
                    "<td width = '150px' align=center >Vs.</td>" . 
                    "<td><img height=50 width=50 runat = 'server' src = '". $data['flagB']. 
                     "' /></td><td width = '75px' >". $data['countryB'] . "</td></tr>";
            }
        }
        
         
        }
        return $result;
    }
}   