<?php
Class Credentials{
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    
    protected function connectDb(){
        $this->host = "localhost";
        $this->user  = 'root';
        $this->password='Letmel0gin';
        $this->database='rugby_wc';
        $this->port = '3306';
        try{
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
        } catch (Exception $ex) {
            echo "Error connecting to database - " . $ex;
        }
        
        
        return $conn;
    }
}