<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer the best products available in the market at competitive prices. We also allow the possibility of payment by various means, and we guarantee that your order will arrive in record time, in addition to discounts and the possibility of returning items within a specified period.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Our team</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
         <img src="images/member1.png" alt="">
         <h3>Obada Ezz Al-Din</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
      </div>

      <div class="swiper-slide slide">
         <img src="images/member2.png" alt="">
         <h3>Karam Al-Dali
         </h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
      </div>

      <div class="swiper-slide slide">
         <img src="images/member3.png" alt="">
         <h3>Ruba Majdalawi</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
      </div>

    

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>




<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">
   <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <h3>john deo</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         </div>
     
   </div>
   <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <h3>john deo</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         </div>
     
   </div>
   <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <h3>john deo</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         </div>
     
   </div>
   <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <h3>john deo</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         </div>
     
   </div>
   <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <h3>john deo</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-solid fa-star fa-beat"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         <i class="fa-sharp fa-regular fa-star"></i>
         </div>
      </div>
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>