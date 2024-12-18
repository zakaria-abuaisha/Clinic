<?php

require "../Core/functions.php";
require "../Core/Database.php";

$id;
$doctor;

if($_SERVER['REQUEST_METHOD'] === "GET")
{
    $id = $_GET['id'];
    $doctor = getDoctorByID($db, $id);
    dd($doctor);
}

if($_SERVER['REQUEST_METHOD'] === "POST")
{

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-cyan-900 flex justify-center items-center">
    <div class="login bg-white p-4 rounded-2xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.60)] w-[650px] mt-[50px] mb-[50px] h-auto flex flex-col items-center">
        <span class="block mb-5">
            <img class="h-32 inline" src="https://imgs.search.brave.com/Tl7E8rAA_ilwevz5X1vzGzq7GjEzgfn2Mg4Kn1qa1jQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzY5LzkwLzk0/LzM2MF9GXzg2OTkw/OTQ5Nl8xa2hVblNZ/MU10NW5hOWJZWGZT/TEFEYnV5R3hNanM5/bi5qcGc">
        </span>
        <form action="" method="post">
            <!-- Name -->
            <label for="Name">Name : </label>
            <input required type="text" 
            value="" 
            name="Name" placeholder="Name" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <!-- Pick Gender -->
            <label>Gender : </label>
            <input class="ml-4" id="male" type="radio" name="gender" value="male"> <label for="male">Male</label>
            <input class="ml-4" id="female" type="radio" name="gender" value="female"> <label for="female">Female</label>
            
            <!-- Nationality -->
            <label class="block mt-3" for="Nationality">Nationality : </label>
            <input required type="text" 
            value="" 
            name="Nationality" placeholder="Nationality" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                     
            <!-- Telephone -->
            <label for="Telephone">Telephone : </label>
            <input required type="number" 
            value="" 
            name="Telephone" placeholder="Telephone" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <!-- Email -->
            <label for="Email">Email : </label>
            <input required type="email" 
            value="" 
            name="Email" placeholder="Email" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <!-- User Name -->
            <label for="UserName">User Name : </label>
            <input required type="text" 
            value="" 
            name="UserName" placeholder="Name" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <?php if($_SERVER['REQUEST_METHOD'] === "POST" && isset($errors["user_exists"] )) : ?>
                <p class="ml-4 mt-[-15px] mb-4 text-red-600"><?= "* ". $errors["user_exists"] ?></p>
            <?php endif; ?>

            <!-- Password -->
            <label for="password">Password : </label>
            <input required type="password" name="password" placeholder="Password" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >

            
            <!-- Confirm Password -->
            <label for="c-password">Confirm Password : </label>
            <input required type="password" name="c-password" placeholder="Confirm Password" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >

            <input class="mb-3 block h-9 w-64 text-white duration-300 px-6 py-2 hover:bg-cyan-900 rounded bg-cyan-700 " type="submit" value="Sign Up">



        </form>
        <div>
            <p class="mb-3">Already have an account? <span><a class="text-cyan-600 hover:cursor-pointer" href="../index.php">Log in</a></span></p>
        </div>
    </div>
</body>
</html>