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
<body class="flex mt-[70px] justify-center items-center">
    <div class="login bg-white p-4 rounded-2xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] w-[650px] h-[500px] flex flex-col items-center">
        <span class="block mb-5">
            <img class="h-32 inline" src="https://imgs.search.brave.com/Tl7E8rAA_ilwevz5X1vzGzq7GjEzgfn2Mg4Kn1qa1jQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzY5LzkwLzk0/LzM2MF9GXzg2OTkw/OTQ5Nl8xa2hVblNZ/MU10NW5hOWJZWGZT/TEFEYnV5R3hNanM5/bi5qcGc">
        </span>
        <form action="forms/home.php" method="post">
            <label for="username">User Name : </label>
            <input class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="username" placeholder="User Name">
            <label for="password">Password: </label>
            <input class="mb-5 block h-9 w-64 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password">
            <input class="mb-5 block h-9 w-64 text-white duration-300 px-6 py-2 hover:bg-cyan-700 rounded bg-cyan-600 " type="submit" value="Log in">
        </form>
        <div>
            <p>Don't Have an Account ? <span><a class="text-cyan-600 hover:cursor-pointer" href="#">Sign up</a></span></p>
        </div>
    </div>
</body>
</html>