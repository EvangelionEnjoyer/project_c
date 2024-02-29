<?php
    require_once ""; // database_credential
    // 
    // Payload == Data you want to insert as JSON

    if(!isset($_GET["functionType"]))
    {
        // error Message
        exit;
    }

    /* switch()
        case newUser:
            createUser
            break;
        case newgame:
            createGame
            break;
        default:
            error message
            exit;
    */

    function createUser(payload)
    {
        $username = 
        $password = 
        $email = 
        /*
            OR

        $username = $_GET["DATA_username"];
        $password = $_POST["DATA_pwd"];
        $email = $_GET["DATA_email"];
        */

        if(!isset($username) || !isset($password) || !isset($email))
        {
            // error message
            exit;
        }

        $passhash = password_hash($password, PASSWORD_DEFAULT);

        if(mysqli_connect_errno())
			{
				die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		mysqli_set_charset($dbc, 'utf8');

        $query = "INSERT INTO tbluser (dtUsername, dtPassword, dtEmail)
                  VALUES (?, ?, ?)";
        $statement = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($statement, "sss", $username, $passhash, $email);
        mysqli_stmt_execute($statement);


        mysqli_close($dbc);
        exit;
    }

    function createGame(payload)
    {
        $name = 
        $genre = 
        $releaseDate = 
        $pegi = 
        $developer = 
        $publisher = 
        $platform = 

        if(!isset($name) || !isset($genre) || !isset($releaseDate) || !isset($pegi) || !isset($developer) || !isset($publisher) || !isset($platform))
        {
            // error message
            exit;
        }

        $query = "INSERT INTO tblgames
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = mysqli_prepare($dbc, $query);
            mysqli_stmt_bind_param($statement, "ssissss", $name, $genre,$releaseDate, $pegi, $developer, $publisher, $platform);
            mysqli_stmt_execute($statement);

        mysqli_close($dbc);
        exit;
    }
?>