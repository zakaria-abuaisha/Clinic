<?php  
require "../Core/Database.php";

function ShowDoctorsTable($db)
{
    $Doctors = [];
    
    $sql = "SELECT Doc_No, Name, Spatiality, Gender, Nationality, Email FROM doctor";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $Doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($Doctors))
    {
        echo "
                      <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
      <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
          <tr>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Doctor Name
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Spatiality
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Gender
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Nationality
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Email
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Action
              </th>
              <th scope=\"col\" class=\"px-6 py-3\">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
        ";
        foreach($Doctors as $doctor)
        {
            echo "
      <tr class=\"odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700\">
                  <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                      {$doctor['Name']}
                  </th>
                  <td class=\"px-6 py-4\">
                      {$doctor['Spatiality']}
                  </td>
                  <td class=\"px-6 py-4\">
                      {$doctor['Gender']}
                  </td>
                  <td class=\"px-6 py-4\">
                      {$doctor['Nationality']}
                  </td>
                  <td class=\"px-6 py-4\">
                      {$doctor['Email']}
                  </td>
                  <td class=\"px-6 py-4\">
                      <a href=\"updatedoctor.php?id={$doctor['Doc_No']}\" class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">Edit</a>
                  </td>
                  <td class=\"px-6 py-4\">
                      <a href=\"{$doctor['Doc_No']}\" class=\"font-medium text-blue-600 dark:text-red-500 hover:underline\">Delete</a>
                  </td>
            </tr>
            ";
        }

        echo "      </tbody>
  </table>";
    }
    else{
        echo "<p>Sorry There Are No Doctors</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-cyan-900" >
  <?php 
  session_start();
   require "header.php" 
   ?>

    <div class="flex flex-row justify-center items-center">
        <div class="p-0 rounded-2xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.60)] w-[90%] mt-[50px] mb-[50px] h-auto">
            <div class="w-full overflow-x-auto shadow-md sm:rounded-lg">
                <?= ShowDoctorsTable($db) ?>
            </div>

        </div>
    </div>

</body>
</html>
