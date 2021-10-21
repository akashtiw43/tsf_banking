<?php
    //require connection
    require('database/DBcontroller.php');

    //require customers
    require('database/customers.php');

    //DBcontroller object
    $db=new DBcontroller();

    //customers object
    $customers=new customers($db);


?>