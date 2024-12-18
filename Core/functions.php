<?php

include_once("Database.php");



function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();      
}

function redirect($path)
{
    header("Location: ". $path);
}

function IsAdmin($prev)
{
    return $prev == 1;
}

function getDoctorByID($db , $id)
{
    try{       
        $sql = "select * from doctor where Doc_No = :id";

        $stm = $db->prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        $doctor = $stm->fetch(PDO::FETCH_ASSOC);
        return $doctor;
    }
    catch(PDOException $ex)
    {
        echo $ex->getmessage();
    }
}

function Authinticate($db, $username, $password)
{
    try{
        $sql = "select * from user where username = :username and password = :password";

        $stm = $db->prepare($sql);
        $stm->bindParam(':username', $username, PDO::PARAM_STR);
        $stm->bindParam(':password', $password, PDO::PARAM_STR);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    catch(PDOException $ex)
    {
        echo $ex->getmessage();
    }
}


function CheckUserExists($db , $username)
{
    $sql = "SELECT * FROM user WHERE UserName = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":username" , $username, PDO::PARAM_STR);

    try{
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) != null ;
    }
    catch(PDOException $ex) {
        echo "Error: " . $ex->getMessage();
    }
}

?>