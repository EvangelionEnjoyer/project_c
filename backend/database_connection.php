<?php
    function database_connection()
    {
        require_once "db_credentials/db_credentials.php";
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME);
        

        if(mysqli_connect_errno())
        {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
        mysqli_set_charset($dbc,'utf8');

        return $dbc;
    }
?>