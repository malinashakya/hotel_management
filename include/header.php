<?php
 require('admin/include/db_config.php');
 require('admin/include/essentials.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-3 shadow-sm sticky-top">
      <div class="container-fluid">
<!--          Logo-->
<!--          me=margin_end fw=font-width fs-font-size -->
        <a class="navbar-brand me-5 fw-bold fs-4 h-font " href="index.php">MalSha</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--              Hotel ko features type listed-->
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="rooms.php">Rooms</a>
            </li>
              <li class="nav-item">
              <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
          <div class="d-flex"> 
<!--              display=flex-->
<!--            <button class="btn btn-outline-success" type="submit">Search</button>-->
              <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal"> Login
              </button>
              <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register
              </button>
          </div>
        </div>
      </div>
</nav>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
<!--          display=flex align-item=center-->
                <h5 class="modal-title d-flex align-items-center">
<!--            Login button click garda icon pani dekhauna ko lagi-->
                <i class="bi bi-person-fill fs-3 me-2"></i>Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<!--          mb=margin-bottom-->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none"  >
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none"  >
                    </div>
<!--                    for creating space between Login button and Forget password wala link-->
                    <div class="d-flex align-items-center justify-content-between mb-2" >
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
<!--                        forget password garda k hi pani function hunna-->
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none" >Forget Password?</a>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<!--            modal-lg=to show the modal in large form-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
<!--          display=flex align-item=center-->
                    <h5 class="modal-title d-flex align-items-center">
<!--            Login button click garda icon pani dekhauna ko lagi-->
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb text-wrap lh-base">Note: Your details must match with your ID(Citizenship Number/Passport Number/Driving License) that will be required while Check-in.</span>
                    <div class="container-fluid px-lg-4 mt-4" >
                        <div class="row">
<!--
                            dividing one row into two columns
                            col-md-6 le half row coverage garxa ani col-md-12le full row cover garxa
-->
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control shadow-none " required>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control shadow-none " required>
                            </div>
<!--                                dividing one row into two columns-->
                            <div class="col-md-6 mb-3">
                            <label class="form-label ">Phone number</label>
                            <input name="phonenum" type="number" class="form-control shadow-none " required>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Picture</label>
                            <input type="file" name="profile" accept=".jpg,.jpeg,.png,.webp" class="form-control shadow-none " required>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control shadow-none" rows="1" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Pincode</label>
                            <input type="number" name="pincode" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Date Of Birth</label>
                                     <input type="date" name="dob" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control shadow-none" required>
                            </div>
<!--                                dividing one row into two columns-->
                            <div class="col-md-6 mb-3">
                            <label class="form-label ">Confirm Password</label>
                            <input type="number" name="cpassword" class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>