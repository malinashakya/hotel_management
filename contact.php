<html>
    <head>
        <title>MalSha Hotel-Contact</title>
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
            <h2 class="fw-bold h-font text-center">CONTACT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 px-4 my-5">
                    <div class="bg-white p-4">
                        <?php  
                        $contacts_query="SELECT * FROM `contact_details` WHERE `sr_no`=?";
                        $values=[1];
                        $contact_r=mysqli_fetch_assoc(select($contacts_query,$values,'i'));
                        // print_r($contact_r);
                        ?>
<!--                        Map-->
                        <iframe class="w-100 rounded" height="320" src="<?php echo $contact_r['gmap'] ?>"></iframe>
                        <h5 class="mt-4">Address</h5>
                        <a href="https://goo.gl/maps/bLNMWQbjk99AzYLX8" target="_blank" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-pin-map"></i><?php echo $contact_r['address'] ?></a>
<!--                        Call Us-->
                        <h5 class="mt-4">Call Us</h5>
                        <a href="tel:+<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone"></i>+<?php echo $contact_r['pn1'] ?></a>
                        <br/>
                         <a href="tel:+<?php echo $contact_r['pn2'] ?>" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone"></i>+<?php echo $contact_r['pn2'] ?></a>
<!--                        Email-->
                        <h5 class="mt-4">Email:</h5>
                        <a href="<?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i>
                        <?php echo $contact_r['email'] ?>
                        </a>
                     </div>
<!--                    Follow Us-->
                     <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow Us</h5>
                        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
                           <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['fb'] ?>"" class="text-decoration-none">
                           <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['tw'] ?>" class="text-decoration-none">
                            <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i>
                           </span>
                        </a>
                        <a href="<?php echo $contact_r['tik'] ?>" class="text-decoration-none">
                            <span class="badge bg-light text-dark fs-6 p-2">
                           <i class="bi bi-tiktok"></i>
                           </span>
                        </a>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 px-4 my-5">
                    <div class="bg-white">
                        <form>
                            <h5>Send a message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500px">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                              <div class="mt-3">
                                <label class="form-label" style="font-weight:500px">E-mail</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                              <div class="mt-3">
                                <label class="form-label" style="font-weight:500px">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                              <div class="mt-3">
                                <label class="form-label" style="font-weight:500px">Message</label>
                                <textarea class="form-control shadow-none" rows="5" style="resize:none"></textarea>
                            </div>
                                     <button type="submit" class="btn text-white custom-bg ">SEND</button>
                        </form>    
                    </div>
            </div>
        </div>
    </div>

        <?php require('include/footer.php');?>

    </body>
</html>