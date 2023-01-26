<?php


session_start();
require('dbconnection.php');



function dd($conn)
{
    echo "<pre>", print_r($conn,true),"</pre>";
    die();
}

?>