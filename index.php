<html>
    <head>
        <title>MalSha Hotel-HOME
        </title>
        <?php require('include/links.php');?>
        <style>
            .availibity-form{
                margin-top:-200px;
                position:relative;
                z-index:2;
            }
            @media screen and (max-width:575px)
            {
                margin-top:-10000px;
            }
                .swiper2 {
      height: 200px;
    }
        </style>
<!--        /*  Image Slider from swiperjs(Use Swiper from CDN)*/-->
            
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    </head>
    <body class="bg-light">
        <?php require('include/header.php'); ?>
<!--        sticky header so that move up down garda ni top mai basos-->
        <div class="container-fluid">
              <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
<!--            w-100 vanna le width 100% gardeu h-100 vanna le height 100% gardeu vaneko d-block=display in block-->
                        <img src="images/swiper/hotel1.png" class="w-100 h-75 d-block" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel2.png"  class="w-100 h-75  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel3.png" class="w-100 h-75  d-block" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel4.png"  class="w-100 h-75  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel5.png"  class="w-100 h-75  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel6.png"  class="w-100 h-75  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel7.png"  class="w-100 h-75  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swiper/hotel8.png"  class="w-100 h-75  d-block"/>
                    </div>
                </div>
            </div>
        </div>
<!--        Check Availibility of Room-->
        <div class="container availibity-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Booking Availability Confirmation </h5>
                        <form>
                            <div class="row align-items-end">
                                <div class="col-lg-3 mb-3">
                                       <label class="form-label" style="font-weight:500">Check-In</label>
                                     <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-3 mb-3">
                                       <label class="form-label" style="font-weight:500">Check-Out</label>
                                     <input type="date" class="form-control shadow-none">
                                </div>
                                 <div class="col-lg-3 mb-3">
                                       <label class="form-label" style="font-weight:500">Adult</label>
                                        <select class="form-select shadow-none" >
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                </div>
                                 <div class="col-lg-2 mb-3">
                                       <label class="form-label" style="font-weight:500">Children</label>
                                        <select class="form-select shadow-none" >
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                </div>
                                <div class="col-lg-1 mb-lg-3 mt-2">
                                    <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
<!--        Our Rooms-->
        <h2 class="mt-4 pt-4 text-center h-font fw-bolder mb-4">Our Rooms</h2>
        <div class="container">
            <div class="row">
<!--                large devices haru ma 4 ota column ani medium devices ma 6 ota column show hos-->
<!--                Room specification card 1-->
                <div class="col-lg-4 col-md-6 my-3">
<!--                   Cards wla Bootstrap ko function-->
                    <div class="card border-0 shadow" style="max-width:350px;margin:auto;">
                      <img src="images/rooms/room1.jpeg" class="card-img-top" alt="Room1">
                      <div class="card-body">
                        <h5 class="card-title">Normal Room</h5>
                        <h6>रु500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Specifications</h6>
<!--
                            badge le chai capsule type ko rectangular background banaedinxa,rounded-pillle chai teslai circular type ko
                            capsule ko shape dinxa,ani textdark nagarda tyo text dekha pardaina
-->
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Bathroom 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telephone 
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC    
                                </span>
                            </div>
<!--                          Guests-->
                           <div class="customers mb-4">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                        <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
<!--                                bootsrap code for star icon-->
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
    <!--                            text-warning le chai star haru lai yellow banaedinxa-->
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                          </div>
                          <div class="d-flex justify-content-evenly">
                               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark mb-2 ">More Details</a>
                          </div>
                        </div>
                    </div>
                </div>
<!--                     large devices haru ma 4 ota column ani medium devices ma 6 ota column show hos-->
<!--                Room specification card 2-->
                <div class="col-lg-4 col-md-6 my-3">
<!--                   Cards wla Bootstrap ko function-->
                    <div class="card border-0 shadow" style="max-width:350px;margin:auto;">
                      <img src="images/rooms/room2.jpeg" class="card-img-top" alt="Room1">
                      <div class="card-body">
                        <h5 class="card-title">Normal Room</h5>
                        <h6>रु500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Specifications</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Bathroom 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telephone 
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC    
                                </span>
                            </div>
                          <!--                          Guests-->
                           <div class="customers mb-4">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                        <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
<!--                                bootsrap code for star icon-->
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
    <!--                            text-warning le chai star haru lai yellow banaedinxa-->
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                          </div>
                          <div class="d-flex justify-content-evenly">
                               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark mb-2 ">More Details</a>
                          </div>
                        </div>
                    </div>
                </div>
<!--                Room specification card 3-->
<!--                     large devices haru ma 4 ota column ani medium devices ma 6 ota column show hos-->
                <div class="col-lg-4 col-md-6 my-3">
<!--                   Cards wla Bootstrap ko function-->
                    <div class="card border-0 shadow" style="max-width:350px;margin:auto;">
                      <img src="images/rooms/room3.jpeg" class="card-img-top" alt="Room1">
                      <div class="card-body">
                        <h5 class="card-title">Normal Room</h5>
                        <h6>रु500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Specifications</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Bathroom 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 2 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telephone 
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC    
                                </span>
                            </div>
                          <!--                          Guests-->
                           <div class="customers mb-4">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                        <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
<!--                                bootsrap code for star icon-->
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
    <!--                            text-warning le chai star haru lai yellow banaedinxa-->
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                          </div>
                          <div class="d-flex justify-content-evenly">
                               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark mb-2 ">More Details</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms Available>>></a>
                </div>
            </div>
        </div>
<!--        Our Facilities-->
        <h2 class="mt-4 pt-4 text-center h-font fw-bolder mb-4">Our Facilities</h2>
        <div class="container mt-5">
            <div class="row justify-content-evenly px-lg-0 px-5 px-md-0">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/Wireless.png" width=90px>
                    <h5 class="mt-3">Wifi</h5>
                </div>   
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/Wireless.png" width=90px>
                    <h5 class="mt-3">Wifi</h5>
                </div>   
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/Wireless.png" width=90px>
                    <h5 class="mt-3">Wifi</h5>
                </div>   
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/Wireless.png" width=90px>
                    <h5 class="mt-3">Wifi</h5>
                </div>   
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/Wireless.png" width=90px>
                    <h5 class="mt-3">Wifi</h5>
                </div>   
                <div class="col-lg-12 text-center mt-5">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">More Facilities</a>
                </div>
            </div>
        </div>
<!--        Our Testimonials-->
          <h2 class="mt-4 pt-4 text-center h-font fw-bolder mb-4">Testimonials</h2>
          <div class="container">
              <!-- Swiper -->
              <div class="swiper swiper2 swiper-testimonial">
                <div class="swiper-wrapper">
                  <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
            <!--            ms=margin start-->
                          <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                      <p>Lorem sd fger ssrter theet wer wet 435 ref wr ther wwe 334 ewrwed rt wrtrt wt4t ggt434 dsfsdfssdf fgsfsdg ssgsg ssgsr sgdfffg 
                      </p>
                    <div class="rating">
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
<!--            ms=margin start-->
                            <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem sd fger ssrter theet wer wet 435 ref wr ther wwe 334 ewrwed rt wrtrt wt4t ggt434 dsfsdfssdf fgsfsdg ssgsg ssgsr sgdfffg 
                    </p>
                  <div class="rating">
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/star.png" width="30px">
<!--            ms=margin start-->
                        <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>Lorem sd fger ssrter theet wer wet 435 ref wr ther wwe 334 ewrwed rt wrtrt wt4t ggt434 dsfsdfssdf fgsfsdg ssgsg ssgsr sgdfffg 
                </p>
            <div class="rating">
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
        <div class="swiper-pagination"></div>
    </div>
   </div>
       <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
                </div>
</div>
<!--        Reach Us-->
            <?php  
            $contacts_query="SELECT * FROM `contact_details` WHERE `sr_no`=?";
            $values=[1];
            $contact_r=mysqli_fetch_assoc(select($contacts_query,$values,'i'));
            // print_r($contact_r);
            ?>
          <h2 class="mt-4 pt-4 text-center h-font fw-bolder mb-4">Reach Us</h2>
          <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
<!--                    map ko share ko embed a map bata html copy garne-->
                    <iframe class="w-100 rounded" height="320" src="<?php echo $contact_r['iframe'] ?>"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call Us</h5>
                        <a href="tel:+<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone"></i>+<?php echo $contact_r['pn1'] ?></a>
                        <br/>
                         <a href="tel:+<?php echo $contact_r['pn2'] ?>" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone"></i>+<?php echo $contact_r['pn2'] ?></a>
                    </div>
<!--                    Follow Us-->
                       <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow Us</h5>
                        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
                           <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                           <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['tik'] ?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                           <i class="bi bi-tiktok"></i>
                           </span>
                        </a>
                        </div>
                </div>
            </div>
         </div>

        <?php require('include/footer.php');
        ?>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
          <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
        loop:true,
        autoplay:{
            delay:3000,
//            disableOnInteraction=false
        }
    });
       var swiper = new Swiper(".swiper-testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
//           3 ota page xa vanera chaddke type le dekhauna ko lagi
    slidesPerView: "3",
           loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
     });
  </script>
    </body>
</html>