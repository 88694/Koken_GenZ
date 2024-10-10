<html>
 <head>
  <title>
   Recipe Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8ff;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        .header img {
            height: 40px;
        }
        .search-bar {
            display: flex;
            align-items: center;
            background-color: #f0f0f5;
            border-radius: 20px;
            padding: 5px 10px;
            width: 300px;
        }
        .search-bar input {
            border: none;
            background: none;
            outline: none;
            padding: 5px;
            width: 100%;
        }
        .search-bar i {
            color: #aaa;
        }
        .nav-links {
            display: flex;
            align-items: center;
        }
        .nav-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        .nav-links .btn {
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            margin-left: 10px;
        }
        .nav-links .btn.register {
            background-color: #333;
            color: #fff;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            padding: 20px;
        }
        .gallery img {
            width: 100%;
            border-radius: 10px;
        }
        .filter-buttons {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .filter-buttons button {
            padding: 10px 20px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 20px;
            margin: 0 5px;
            cursor: pointer;
        }
        .filter-buttons button.active {
            background-color: #d3cce3;
            border-color: #d3cce3;
        }
        .list-items {
            padding: 0 20px;
        }
        .list-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .list-item img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 10px;
        }
        .list-item .details {
            flex-grow: 1;
        }
        .list-item .details h3 {
            margin: 0;
            font-size: 16px;
            font-weight: 500;
        }
        .list-item .details p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666;
        }
        .list-item .rating {
            display: flex;
            align-items: center;
        }
        .list-item .rating i {
            color: #f5c518;
        }
        .list-item .rating .fa-heart {
            color: #aaa;
            margin-left: 10px;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 4px;
        }
        .mobile-nav {
            display: none;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            border-top: 1px solid #ddd;
        }
        .mobile-nav a {
            padding: 10px 0;
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        @media (max-width: 768px) {
            .search-bar {
                width: 200px;
            }
            .nav-links {
                display: none;
            }
            .hamburger {
                display: flex;
            }
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }
  </style>
 </head>
 <body>
  <div class="header">
   <img alt="Logo" height="40" src="https://storage.googleapis.com/a1aa/image/AQYoMezAwBW4TS5ex3Wia1suAbX3Sxy6YiU5dCYFCoZj9UlTA.jpg" width="40"/>
   <div class="search-bar">
    <i class="fas fa-search">
    </i>
    <input placeholder="Hinted search text" type="text"/>
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
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
   <div class="list-item">
    <img alt="List item image" height="60" src="https://storage.googleapis.com/a1aa/image/tWHJDcguY5bJGtquj2rTIykzd0gQ0CjVWq09jrAR0d8ZPV5E.jpg" width="60"/>
    <div class="details">
     <h3>
      List item
     </h3>
     <p>
      Category • $$ • 1.2 miles away
     </p>
     <p>
      Supporting line text lorem ipsum dolor sit amet, consectetur.
     </p>
    </div>
    <div class="rating">
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="fas fa-star">
     </i>
     <i class="far fa-heart">
     </i>
    </div>
   </div>
  </div>
  <script>
   function toggleMobileNav() {
            var mobileNav = document.getElementById("mobileNav");
            if (mobileNav.style.display === "flex") {
                mobileNav.style.display = "none";
            } else {
                mobileNav.style.display = "flex";
            }
        }
  </script>
 </body>
</html>