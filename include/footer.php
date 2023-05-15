<!--          Footer-->
<?php  
                        $contacts_query="SELECT * FROM `contact_details` WHERE `sr_no`=?";
                        $values=[1];
                        $contact_r=mysqli_fetch_assoc(select($contacts_query,$values,'i'));
                        // print_r($contact_r);
                        ?>
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">MalSha</h3>
            <p>dsfdf gerg ferr ereg werwet fgr wtwe sfsdf etrh sfwet </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
                <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br/>
                <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br/>
                <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br/>
                <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br/>
                <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
                <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3 text-decoration-none text-dark">Instagram <i class="bi bi-instagram"></i></a><br/>
                <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3 text-decoration-none text-dark">Facebook<i class="bi bi-facebook"></i></a><br/>
                <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block mb-3 text-decoration-none text-dark">Twitter<i class="bi bi-twitter"></i></a><br/>
                <a href="<?php echo $contact_r['tik'] ?>" class="d-inline-block mb-3 text-decoration-none text-dark">Tiktok<i class="bi bi-tiktok"></i></a>
        </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0 fs-0">Developed By:MalSha</h6>
<!--        Bootstrap's script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>