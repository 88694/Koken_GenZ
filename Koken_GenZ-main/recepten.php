<html>
 <head>
  <title>
   Recipe Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <link rel="icon" href="assets/Images/chef.png">
  <link rel="stylesheet" href="assets/CSS/style.css">
 </head>
 <body>
  <div class="header">
    <a href="index.php">
    <img alt="Logo" height="40" src="https://storage.googleapis.com/a1aa/image/AQYoMezAwBW4TS5ex3Wia1suAbX3Sxy6YiU5dCYFCoZj9UlTA.jpg" width="40"/>
    </a>
   <div class="search-bar">
    <i class="fas fa-search">
    </i>
       <input type="text" id="search-bar" class="form-control" placeholder="Zoek agenda's..." onkeyup="filterAgenda()">
   </div>
   <div class="nav-links">
    <a href="#">
     Recepten
    </a>
    <a href="#">
     Toevoegen
    </a>
    <a href="#">
     Verwijderen
    </a>
    <a class="btn login" href="#">
     Log in
    </a>
    <a class="btn register" href="#">
     Registreer
    </a>
   </div>
   <div class="hamburger" onclick="toggleMobileNav()">
    <div>
    </div>
    <div>
    </div>
    <div>
    </div>
   </div>
  </div>
  <div class="mobile-nav" id="mobileNav">
   <a href="#">
    Recepten
   </a>
   <a href="#">
    Toevoegen
   </a>
   <a href="#">
    Verwijderen
   </a>
   <a class="btn login" href="#">
    Log in
   </a>
   <a class="btn register" href="#">
    Registreer
   </a>
  </div>
  <div class="gallery">
   <img alt="Dish 1" height="200" src="https://storage.googleapis.com/a1aa/image/lEFVqEcguFakFBZK8d24V3BT7g4sOX9Lg0sLIwbzecGyeUlTA.jpg" width="300"/>
   <img alt="Dish 2" height="200" src="https://storage.googleapis.com/a1aa/image/zNpWs1sJuSJfBCuZXMGZ1dKX9RyvgMyfwzENchJHDJ2q9UlTA.jpg" width="300"/>
   <img alt="Dish 3" height="200" src="https://storage.googleapis.com/a1aa/image/nbN2rLqqxX40M9kE0KoYRVDR1Uc88hD8SeW2Hv0kQxGveUlTA.jpg" width="300"/>
   <img alt="Dish 4" height="200" src="https://storage.googleapis.com/a1aa/image/e5f3z7ILfZB9FobLOocEb7Auth3SskMq1kPwDJIYPeZw1TVOB.jpg" width="300"/>
   <img alt="Dish 5" height="200" src="https://storage.googleapis.com/a1aa/image/ivesK3pJtiVEVC4oqHR2aokIXKsd4CpyCRmOhNJifsfB7pKnA.jpg" width="300"/>
   <img alt="Dish 6" height="200" src="https://storage.googleapis.com/a1aa/image/gKCuPFgIDgotC9cOBAVxNxRAIhlOkNHNKnD0EOlyelhueUlTA.jpg" width="300"/>
   <img alt="Dish 7" height="200" src="https://storage.googleapis.com/a1aa/image/w5JWVfosCpyesUfqX5w4Eo5gI0zaty3hrkUAjTT6jXbM7pKnA.jpg" width="300"/>
   <img alt="Dish 8" height="200" src="https://storage.googleapis.com/a1aa/image/qjqroQlSriKUNN1E0FKRMu969Ys8KY8st3berBazgvgweUlTA.jpg" width="300"/>
   <img alt="Dish 9" height="200" src="https://storage.googleapis.com/a1aa/image/OugH2fTYF21fXkPp0B7tyMae4SsHHarC4UodYY9zijk16pKnA.jpg" width="300"/>
   <img alt="Dish 10" height="200" src="https://storage.googleapis.com/a1aa/image/f5LoEsOCLHTwC6zNINXMCudfTjc8yFuYvT4XeAZ50fOg2TVOB.jpg" width="300"/>
  </div>
  <div class="filter-buttons">
   <button>
    Voorgerecht
   </button>
   <button class="active">
    Hoofdgerecht
   </button>
   <button>
    Bijgerecht
   </button>
  </div>
  <div class="list-items">
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      Train
     </h3>
     <p>
      10 min
     </p>
     <p>
         No
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      burg
     </h3>
     <p>
      15 min
     </p>
     <p>
      No
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      Qwerty
     </h3>
     <p>
      15 min
     </p>
     <p>
         Healthy
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      prof
     </h3>
     <p>
      5 min
     </p>
     <p>
         Healthy
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      Food
     </h3>
     <p>
      20 min
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      Silt time
     </h3>
     <p>
      20 min
     </p>
     <p>
      Healthy
     </p>
    </div>
       <div class="rating-container">
       <div class="rating">
           <i class="fas fa-star" data-value="1"></i>
           <i class="fas fa-star" data-value="2"></i>
           <i class="fas fa-star" data-value="3"></i>
           <i class="fas fa-star" data-value="4"></i>
           <i class="far fa-star" data-value="5"></i>
           <i class="far fa-heart" id="like-button"></i>
       </div>
       </div>
   </div>
  </div>

 <script src="Beroeps_GenZ/assets/Javascript/index.js"></script>
  <script src="Beroeps_GenZ/assets/Javascript/search.js"></script>

 </body>
</html>