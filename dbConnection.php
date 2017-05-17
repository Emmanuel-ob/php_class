<?php


function connection(){

    try{

return  new PDO('mysql:host=localhost; dbname=switch', 'root', '');

//echo '<H2>CONNECTED TO THE DATABASE<H2>';

}catch(PDOException $e){

    die('could not connect to database');
    //die($e->getMessage());
}

}

?>