<?php 

require_once 'header.html';
require_once 'navbar.html';

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Our Team Section | CodingLab </title>
    <link rel="stylesheet" href="votar.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="images/img1.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Fernando Remifa</div>
             <!-- Cambiamos el botón por uno personalizado -->
             <button class="custom-button">Votar</button>
           </div>

         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="images/img2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Conrad Min</div>
             <!-- Cambiamos el botón por uno personalizado -->
             <button class="custom-button">Votar</button>
           </div>

         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="images/img3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Mariana Stacio</div>
             <!-- Cambiamos el botón por uno personalizado -->
             <button class="custom-button">Votar</button>
           </div>

         </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
