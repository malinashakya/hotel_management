<?php 
require('include/essentials.php');
AdminLogin();
?>
<html>
<head>
    <title>Admin Login Panel- Settings</title>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('include/header.php') ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-10 ms-auto p-4 overflow-hidden">
                <h4 class="mb-4">SETTINGS</h4>
                 <!-- General Settings -->
                 <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#generalsetting">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
                <!-- General Settings Modal -->
                <div class="modal fade" id="generalsetting" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <form id="generalsetting_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">General Settings</h5>
                        </div>
                        <div class="modal-body">
                            <div class=" mb-3">
                                <label class="form-label fw-bold">Site Title</label>
                                <input type="text" name="site_title" id="site_title_input" class="form-control shadow-none" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label fw-bold">About us</label>
                                    <textarea class="form-control shadow-none" id="site_about_input" name="site_about" rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about" class="btn  text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                        </div>
                    </form>
                 </div>
                </div>
                <!-- Shutdown Section --><!-- //no booking or payment -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input class="form-check-input" type="checkbox" id="shutdown-toggle" onchange="update_shutdown(this.value)">
                                </form>
                            </div>
                        </div>
                        <p class="card-text" id="site_title">No customers will be allowed to book room or make payments, when shutdown mode is turned on.</p>
                    </div>
                </div>
                <!-- Contact Details -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contactsetting">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                         <i class="bi bi-facebook"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-twitter"></i>
                                        <span id="tw"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-tiktok"></i>
                                        <span id="tik"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe class="border p-2 w-100" id="iframe" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        
    
                    </div>
                </div>

                 <!-- Contact Details Modal -->
                 <div class="modal fade" id="contactsetting" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                     <form id="contactsetting_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Contact Settings</h5>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" mb-3">
                                            <label class="form-label fw-bold">Address</label>
                                            <input type="text" name="site_title" id="address_input" class="form-control shadow-none" required>
                                        </div>
                                        <div class=" mb-3">
                                                <label class="form-label fw-bold">Google Map Link</label>
                                                <input type="text" name="gmap" id="gmap_input" class="form-control shadow-none" required>
                                        </div>
                                        <div class=" mb-3">
                                                <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-telephone"></i></span>
                                                        <input type="text" name="pn1" id="pn1_input" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-telephone"></i></span>
                                                        <input type="text" name="pn2" id="pn2_input" class="form-control shadow-none" required>
                                                    </div>
                                        </div>
                                        <div class=" mb-3">
                                                <label class="form-label fw-bold">E-mail</label>
                                                <input type="text" name="email" id="email_input" class="form-control shadow-none" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> <i class="bi bi-instagram"></i></span>
                                                            <input type="text" name="insta" id="insta_input" class="form-control shadow-none" required>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> <i class="bi bi-facebook"></i></span>
                                                            <input type="text" name="fb" id="fb_input" class="form-control shadow-none" required>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> <i class="bi bi-twitter"></i></span>
                                                            <input type="text" name="tw" id="tw_input" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">  <i class="bi bi-tiktok"></i></span>
                                                            <input type="text" name="tik" id="tik_input" class="form-control shadow-none">
                                                        </div>
                                        </div>
                                        <div class=" mb-3">
                                            <label class="form-label fw-bold">iFrame Src</label>
                                            <input type="text" name="iframee" id="iframe_input" class="form-control shadow-none" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="contacts_input(contacts_data)" class="btn  text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                    </div>
                    </form>
                 </div>
                </div>
                <!-- Management Team Section -->
                <div class="card border-0 shadow-sm mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Management Team</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#teamsetting">
                        <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>
                    <div class="row" id="team-data">

                    </div>
                </div>
                </div>
             <!-- Management Team Modal -->
             <div class="modal fade" id="teamsetting" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <form id="teamsetting_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Team Member</h5>
                        </div>
                        <div class="modal-body">
                            <div class=" mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="member_name" id="member_name_input" class="form-control shadow-none" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label fw-bold">Picture</label>
                            <!-- using accept means to do validation while choosing file -->
                            <input type="file" accept=".jpg,.png,.webp,.jpeg" name="member_picture_input" id="member_picture_input" class="form-control shadow-none" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="" class="btn  text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                        </div>
                    </form>
                 </div>
                </div>
           </div>
        </div>
    </div>
    <?php 
    require('include/scripts.php');
    ?>
    <script>
            //AJAX
        let general_data, contacts_data;

        let generalsetting_form=document.getElementById('generalsetting_form');
        let site_title_input=document.getElementById('site_title_input');
        let site_about_input=document.getElementById('site_about_input');

        let contactsetting_form=document.getElementById('contactsetting_form');

        let teamsetting_form= document.getElementById('teamsetting_form');
        let member_name_input=document.getElementById('member_name_input');
        let member_picture_input=document.getElementById('member_picture_input');
        function get_general()
        {
            let site_title=document.getElementById('site_title');
            let site_about=document.getElementById('site_about');

            let shutdown_toggle=document.getElementById('shutdown-toggle');
            let xhr=new XMLHttpRequest();//object created
            xhr.open("POST","ajax/settings_crud.php",true);//open(method,url,boolean)
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload=function(){
                general_data=JSON.parse(this.responseText);//changing data from JSON to Javascript Object
                site_title.innerText=general_data.site_title;
                site_about.innerText=general_data.site_about;

                site_title_input.value=general_data.site_title;
                site_about_input.value=general_data.site_about;

                if(general_data.shutdown==0)
                {
                    shutdown_toggle.checked=false;
                    shutdown_toggle.value=0;
                }
                else{
                    shutdown_toggle.checked=true;
                    shutdown_toggle.value=1;
                }
            }
            xhr.send('get_general'); 
        }

        generalsetting_form.addEventListener('submit',function(e)
        {
            e.preventDefault();//prevent from refreshing page
            update_general(site_title_input.value,site_about_input.value);
        }
        )
        function update_general(site_title_val,site_about_val)
        {
            let xhr=new XMLHttpRequest();//object created
            xhr.open("POST","ajax/settings_crud.php",true);//open(method,url,boolean)
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload=function(){
                var myModal = document.getElementById('generalsetting')
                var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                modal.hide();
                //console.log(this.responseText);
                if(this.responseText==1)
                {
                    alert('success','Data Updated!');
                    get_general();
                }
                else{
                    alert('error','No Changes made!');
                }
            }
            xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&update_general'); 
        }
        
        function update_shutdown(val)
        {
            let xhr=new XMLHttpRequest();//object created
            xhr.open("POST","ajax/settings_crud.php",true);//open(method,url,boolean)
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload=function(){
                //console.log(this.responseText);
                if(this.responseText==1 && general_data.shutdown==0)
                {
                    alert('success','Shutdowned the Site!');
                }
                else{
                    alert('success','Shutdown mode Off!');
                }
                get_general();
            }
            xhr.send('update_shutdown='+val); 
        }

        function get_contacts()
        {
            let contacts_p_id=['address','gmap','pn1','pn2','email','insta','fb','tw','tik'];
            let iframe=document.getElementById('iframe');

            let xhr=new XMLHttpRequest();//object created
            xhr.open("POST","ajax/settings_crud.php",true);//open(method,url,boolean)
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload=function(){
                contacts_data=JSON.parse(this.responseText);//changing data from JSON to Javascript Object 
            contacts_data=Object.values(contacts_data);
                
            for(i=0;i<contacts_p_id.length;i++)
            {
                    document.getElementById(contacts_p_id[i]).innerText=contacts_data[i+1];
            }
            iframe.src=contacts_data[10];
            contacts_input(contacts_data);
            }
            xhr.send('get_contacts'); 
        }

        function contacts_input(contacts_data)
        {
            let contacts_input_id=['address_input','gmap_input','pn1_input','pn2_input','email_input','insta_input','fb_input','tw_input','tik_input','iframe_input'];
            for(i=0;i<contacts_input_id.length;i++)
            {
                document.getElementById(contacts_input_id[i]).value=contacts_data[i+1];
            }
        }

         contactsetting_form.addEventListener('submit',function(e)
         {
            e.preventDefault();
            update_contacts();
         })

         function  update_contacts()
         {
            let index=['address','gmap','pn1','pn2','email','insta','fb','tw','tik','iframe'];
            let contacts_input_id=['address_input','gmap_input','pn1_input','pn2_input','email_input','insta_input','fb_input','tw_input','tik_input','iframe_input'];

            let data_string="";
            for(i=0;i<index.length;i++)
            {
                data_string +=index[i]+"="+document.getElementById(contacts_input_id[i]).value+'&';
      
           }
             data_string+="update_contacts";
       

             let xhr=new XMLHttpRequest();//object created
            xhr.open("POST","ajax/settings_crud.php",true);//open(method,url,boolean)
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
           
            xhr.onload=function(){
                var myModal = document.getElementById('contactsetting')
                var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                modal.hide();
                if(this.responseText==1)
                {
                    alert('success','Changes saved!');
                    get_contacts();
                }
                else{
                    alert('error','No changes made!');
                }
            }
            xhr.send(data_string);
        }

        teamsetting_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_member();
        });

        function add_member()
        {
            let data=new FormData();
            data.append('name',member_name_input.value);
            data.append('picture',member_picture_input.files[0]); //only select one image
            data.append('add_member','');
        }
        window.onload=function()
        {
            get_general();
            get_contacts();
        }
        </script> 
    </body>
</html>