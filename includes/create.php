<?php
    //require_once "db_credential.php"; // database_credential
    // 
    // Payload == Data you want to insert as JSON

    if(!isset($_GET["functionType"]) || (!isset($_GET["Payload"])))
    {
        // error message
        $error = array("Error"=>"FunctionType or Payload not set!");
        echo json_encode($error);
        exit;
    }

    echo $_GET["functionType"];
    switch ($_GET["functionType"]) {
        case 'createUser':
            createUser($_GET["Payload"]);
            break;
        case "creategrame":
            createGame($_GET["Payload"]);
            break;
        default:
            $error = array("Error"=>"FunctionType is not set.");
            echo json_encode($error);
            break;
    }

    function createUser($payload)
    {
        echo $payload;
        exit;
    }

    function createGame($payload)
    {
        echo $payload;
        exit;
    }
?>