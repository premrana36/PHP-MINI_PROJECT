<?php

function databaseConnector() : mysqli|string
{
    $connection = mysqli_connect("localhost", "root", "", "02_mini_project");
    if ($connection) {
        return $connection;
    } else {
        return "can not connect to database";
    }
}


function databaseConnectorClose($a) : void
{
    mysqli_close($a);
    unset($a);
}
