<html>
    <head>
        <title>MalSha Hotel-Rooms</title>
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
            .pop:hover{
                border-color:aquamarine !important;
                transform:scale(1.05);
                  transition: all 0.4s;
                
            }
        </style>
<!--        /*  Image Slider from swiperjs(Use Swiper from CDN)*/-->
            
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    </head>
    <body class="bg-light">
        <?php require('include/header.php'); ?>
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">OUR  ROOMS</h2>      
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch ">
                       <h5 class="mt-2">FILTERS</h5>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                                <div class="border bg-light rounded mb-3 p-3">
                                    <h6 class="mb-3" style="font-size:16px">CHECK AVAILABILITY</h6>
                                     <label class="form-label" style="font-weight:500">Check-In</label>
                                     <input type="date" class="form-control shadow-none mb-2">
                                     <label class="form-label" style="font-weight:500">Check-Out</label>
                                     <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light rounded mb-3 p-3">
                                    <h6 class="mb-3" style="font-size:16px">FACILITIES</h6>
                                    <div class="mb-2">
<!--                                        form-check-input le chai checkbox ko looks dinxa-->
                                        <input type="checkbox" id="facility1" class="form-check-input shadow-none me-1">
                                        <label class="form-label" for="facility1" style="font-weight:500">Facility One</label>
                                    </div>
                                     <div class="mb-2">
<!--                                        form-check-input le chai checkbox ko looks dinxa-->
                                        <input type="checkbox" id="facility2" class="form-check-input shadow-none me-1">
                                        <label class="form-label" for="facility2" style="font-weight:500">Facility Two</label>
                                    </div>
                                     <div class="mb-2">
<!--                                        form-check-input le chai checkbox ko looks dinxa-->
                                        <input type="checkbox" id="facility3" class="form-check-input shadow-none me-1">
                                        <label class="form-label" for="facility3" style="font-weight:500">Facility Three</label>
                                    </div>
                                </div>
                                <div class="border bg-light rounded mb-3 p-3">
                                    <h6 class="mb-3" style="font-size:16px">GUESTSS</h6>
                                    <div class="d-flex">
                                        <div class="me-3">
                                          <label class="form-label" style="font-weight:500">Adults</label>
                                          <input type="number" class="form-control shadow-none mb-2">
                                        </div>
                                        <div>
                                          <label class="form-label" style="font-weight:500">Children</label>
                                          <input type="number" class="form-control shadow-none mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </nav>
                </div>
                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 shadow border-0">
                      <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0  mb-md-0 mb-3">
                          <img src="images/rooms/room1.jpeg" class="img-fluid rounded" >
                        </div>
                          <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                              Features
                            <div class="features mb-3">
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
<!--                              Facilities-->
                         <div class="facilities mb-3">
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
                           <div class="customers">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                              
                        </div>
                        <div class="col-md-2 text-center">
                            <h6>रु500 per night</h6>
                              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark mb-2 ">More Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-4 shadow border-0">
                      <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0  mb-md-0 mb-3">
                          <img src="images/rooms/room1.jpeg" class="img-fluid rounded" >
                        </div>
                          <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                              Features
                            <div class="features mb-3">
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
<!--                              Facilities-->
                         <div class="facilities mb-3">
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
                           <div class="customers">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                              
                        </div>
                        <div class="col-md-2 text-center">
                            <h6>रु500 per night</h6>
                              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark mb-2 ">More Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-4 shadow border-0">
                      <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0  mb-md-0 mb-3">
                          <img src="images/rooms/room1.jpeg" class="img-fluid rounded" >
                        </div>
                          <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                              Features
                            <div class="features mb-3">
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
<!--                              Facilities-->
                         <div class="facilities mb-3">
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
                           <div class="customers">
                                <h6 class="mb-1">Customers</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 4 adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 children 
                                </span>
                            </div>
                              
                        </div>
                        <div class="col-md-2 text-center">
                            <h6>रु500 per night</h6>
                              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark mb-2 ">More Details</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require('include/footer.php');?>

    </body>
</html>