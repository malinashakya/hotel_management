<html>
    <head>
        <title>MalSha Hotel-About</title>
        <?php require('include/links.php');?>
        <style>
            .box:hover{
                border-color:aquamarine !important;
/*                !important lagaunu karna inline css ma j xa tehi hune garxa tara internal css pani jaaos vanna lai ho*/
            }
        </style>
<!--        /*  Image Slider from swiperjs(Use Swiper from CDN)*/-->
            
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    </head>
    <body class="bg-light">
        <?php require('include/header.php'); ?>
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  </p>
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem Ipsum is simply dummy </h3>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                 <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                     <img src="images/about/about.jpg" class="w-100">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4 ">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/hotel.png" width="70px">
                        <h4 class="mt-3">250+ rooms</h4>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 mb-4 px-3 ">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/customer.avif" width="70px">
                        <h4 class="mt-3">150+ customers</h4>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/review.svg" width="70px">
                        <h4 class="mt-3">100+ reviews</h4>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/staff.avif" width="70px">
                        <h4 class="mt-3">30+ staffs</h4>
                    </div>
                </div>
           
            </div>
        </div>
        <h3 class="my-5 fw-bold text-center h-font">Management Team</h3>
        <div class="container px-4">
          <!-- Swiper -->
  <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <h5 class="mt-5">Zendaya</h5>
                <img src="images/about/team1.jpg" class="w-100 ">
                 <p class="mt-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
            </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <h5 class="mt-5">Zendaya</h5>
                <img src="images/about/team1.jpg" class="w-100 ">
                  <p class="mt-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
            </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <h5 class="mt-5">Zendaya</h5>
                <img src="images/about/team1.jpg" class="w-100 ">
                  <p class="mt-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
            </div>
         </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
        </div> 
         <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
          <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:3 ,
      spaceBetween: 50,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script> 

        <?php require('include/footer.php');?>

    </body>
</html>