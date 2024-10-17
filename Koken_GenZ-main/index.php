<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Ghrelin
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link rel="icon" href="assets/Images/chef.png">
  <style>
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: #333;
      margin: 4px 0;
      transition: 0.4s;
    }

    .nav-menu {
      display: flex;
    }

    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }

      .nav-menu {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .nav-menu.active {
        display: flex;
      }

      .nav-menu a {
        padding: 10px;
        border-top: 1px solid #ddd;
      }
    }
  </style>
 </head>
 <body class="font-roboto bg-gray-50">
  <!-- Header -->
  <header class="bg-white shadow-md relative">
   <div class="container mx-auto flex items-center justify-between p-4">
    <div class="flex items-center space-x-4">
     <img alt="Logo" class="h-10 w-10" height="50" src="https://storage.googleapis.com/a1aa/image/TOh7VNePOq2xBKrHZHiuXHWIYfqvtpnTQQw0KDo5fVZS6RPnA.jpg" width="50"/>
     <div class="relative">
      <input class="bg-purple-100 rounded-full pl-10 pr-4 py-2 focus:outline-none" placeholder="Hinted search text" type="text"/>
      <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
      </i>
     </div>
    </div>
    <div class="hamburger" onclick="toggleMenu()">
     <div>
     </div>
     <div>
     </div>
     <div>
     </div>
    </div>
    <nav class="nav-menu flex items-center space-x-4">
     <a class="text-gray-700" href="#">
      Recepten
     </a>
     <a class="text-gray-700" href="#">
      Toevoegen
     </a>
     <a class="text-gray-700" href="#">
      Verwijderen
     </a>
     <a class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full" href="#">
      Log in
     </a>
     <a class="bg-gray-800 text-white px-4 py-2 rounded-full" href="#">
      Registreer
     </a>
    </nav>
   </div>
  </header>
  <!-- Hero Section -->
  <section class="relative">
   <img alt="Delicious food" class="w-full h-96 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/9Nj9kt802e3zByHb5l5Dh6jw2xgzq07QOLw44wa18HZmeonTA.jpg" width="1200"/>
   <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center text-white">
    <h1 class="text-5xl font-bold">
     Ghrelin
    </h1>
    <p class="text-xl mt-2">
     I know your drooling...
    </p>
    <a class="mt-4 bg-black bg-opacity-75 px-6 py-3 rounded-full" href="#">
     Check het recept →
    </a>
   </div>
  </section>
  <!-- Main Content -->
  <main class="container mx-auto py-8">
   <!-- Starters Section -->
   <section>
    <h2 class="text-2xl font-bold">
     Starters
    </h2>
    <p class="text-gray-500 mb-4">
     voor beginners
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Makkelijke ”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Heerlijke”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Quote”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Quote”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
    </div>
   </section>
   <!-- Top Rated Dishes Section -->
   <section class="mt-8">
    <h2 class="text-2xl font-bold">
     Top beoordeelde gerechten
    </h2>
    <p class="text-gray-500 mb-4">
     Top keuze van de redactie
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Quote”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-4">
      <img alt="Dish image" class="h-20 w-20 rounded-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/nVbTBrcfXJUrS6ndqjL09ftW8Q6BWUpHntB18AUecW3U6RPnA.jpg" width="100"/>
      <div>
       <p class="text-lg font-bold">
        “Quote”
       </p>
       <p class="text-gray-500">
        Title
       </p>
       <p class="text-gray-400">
        Description
       </p>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <footer class="bg-white py-8 mt-8">
   <div class="container mx-auto flex justify-between">
    <img alt="Logo" class="h-10 w-10" height="50" src="https://storage.googleapis.com/a1aa/image/TOh7VNePOq2xBKrHZHiuXHWIYfqvtpnTQQw0KDo5fVZS6RPnA.jpg" width="50"/>
    <div class="flex space-x-16">
     <div>
      <h3 class="font-bold">
       Verkennen
      </h3>
      <ul class="mt-2 space-y-1">
       <li>
        <a class="text-gray-500" href="#">
         Hoofdgerecht
        </a>
       </li>
       <li>
        <a class="text-gray-500" href="#">
         Voorgerecht
        </a>
       </li>
       <li>
        <a class="text-gray-500" href="#">
         Bijgerecht
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3 class="font-bold">
       Eigen gerechten
      </h3>
      <ul class="mt-2 space-y-1">
       <li>
        <a class="text-gray-500" href="#">
         Nieuw Recept
        </a>
       </li>
       <li>
        <a class="text-gray-500" href="#">
         Recept Bewerken
        </a>
       </li>
       <li>
        <a class="text-gray-500" href="#">
         Favorieten
        </a>
       </li>
      </ul>
     </div>
    </div>
   </div>
  </footer>
  <script>
   function toggleMenu() {
      const navMenu = document.querySelector('.nav-menu');
      navMenu.classList.toggle('active');
    }
  </script>
 </body>
</html>