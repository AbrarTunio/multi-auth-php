<?php 

class Database
{
    public function getdb(){
       return mysqli_connect( "localhost" , "root" , "" , "loginsystem" );
    }
}