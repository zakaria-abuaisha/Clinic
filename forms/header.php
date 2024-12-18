<?php require "../Core/functions.php"; ?>
<header class="p-4 bg-white shadow md:flex  md:justify-between">
    <div class="flex justify-between items-center">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-14 inline" src="https://imgs.search.brave.com/Tl7E8rAA_ilwevz5X1vzGzq7GjEzgfn2Mg4Kn1qa1jQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA4LzY5LzkwLzk0/LzM2MF9GXzg2OTkw/OTQ5Nl8xa2hVblNZ/MU10NW5hOWJZWGZT/TEFEYnV5R3hNanM5/bi5qcGc">
        Clinic
      </span>
      <span class="text-3xl mx-2 cursor-pointer md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-blue-600 duration-300">Home</a>
      </li>
      <li class="<?= ! IsAdmin($_SESSION['user']['Priv']) ? "mx-4 my-6 md:my-0" : "hidden" ?>">
        <a href="#" class="text-xl hover:text-blue-600 duration-300">My Account</a>
      </li>
      <li class="<?= IsAdmin($_SESSION['user']['Priv']) ? "mx-4 my-6 md:my-0" : "hidden" ?>">
        <a href="ShowDoctors.php" class="text-xl hover:text-blue-600 duration-300">Doctors</a>
      </li> 
      <li class="<?= ! IsAdmin($_SESSION['user']['Priv']) ? "mx-4 my-6 md:my-0" : "hidden" ?>">
        <a href="#" class="text-xl hover:text-blue-600 duration-300">Appointments</a>
      </li>

      <div class="bg-cyan-700  duration-300 px-6 py-2 mx-4 hover:bg-cyan-900 rounded">
        <a href="../Core/logout.php" class="text-white">Log out</a>
      </div>

    </ul>
</header>