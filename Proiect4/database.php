<?php

class database {
    
    function __construct() 
    {  
    }
    function connection()
    {
        $con = mysqli_connect('localhost', 'root', '', 'myproject') or die ("Failed to connect: ".mysqli_error($con));
        return $con;
    }
}
