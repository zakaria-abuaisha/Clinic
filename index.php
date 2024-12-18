
<?php
    $errors = [];
    require "Core/functions.php";
    require "Core/Database.php";

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = Authinticate($db, $username , $password);
        if($user)
        {
            session_start();

            $_SESSION['user'] = $user;
            
            redirect("forms/home.php");
        }
        else{
            $errors = "Wrong Username or password!";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-cyan-900 flex mt-[70px] justify-center items-center">
    <div class="login bg-white p-4 rounded-2xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.60)] w-[650px] h-[500px] flex flex-col items-center">
        <span class="block mb-5">
            <img class="h-32 inline" src="https://imgs.search.brave.com/Tl7E8rAA_ilwevz5X1vzGzq7GjEzgfn2Mg4Kn1qa1jQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzY5LzkwLzk0/LzM2MF9GXzg2OTkw/OTQ5Nl8xa2hVblNZ/MU10NW5hOWJZWGZT/TEFEYnV5R3hNanM5/bi5qcGc">
        </span>
        <form action="" method="post">
            <label for="username">User Name : </label>
            <input required type="text" 
            value="<?= ( $_SERVER['REQUEST_METHOD'] === "POST"? $username : "" ) ?>" 
            name="username" placeholder="User Name" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <label for="password">Password: </label>
            <input required type="password" name="password" placeholder="Password" class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >
            <input class="mb-3 block h-9 w-64 text-white duration-300 px-6 py-2 hover:bg-cyan-900 rounded bg-cyan-700 " type="submit" value="Log in">
            <?php if($_SERVER['REQUEST_METHOD'] === "POST") : ?>
                <p class="ml-4 text-red-600"><?= $errors ?></p>
            <?php endif; ?>
        </form>
        <div>
            <p>Don't Have an Account ? <span><a class="text-cyan-600 hover:cursor-pointer" href="forms/signup.php">Sign up</a></span></p>
        </div>
    </div>
</body>
</html>