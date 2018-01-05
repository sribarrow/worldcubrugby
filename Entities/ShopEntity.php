<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopEntity
 *
 * @author sripriya
 */
class ShopEntity {
    //put your code here
    
    //`id``id``name``price``type``size``country``image``description`
    public $id;
    public $name;
    public $type;
    public $price;
    public $size;
    public $country;
    public $image;
    public $description;
    
    function __construct($id, $name,  $price, $type, $size, $country, $image, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
        $this->country = $country;
        $this->image = $image;
        $this->description = $description;
    }

}
