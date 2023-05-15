<?php 
    require('include/essentials.php');
    require('include/db_config.php');
    session_start();
    if((isset($_SESSION['Admin_Login']) && $_SESSION['Admin_Login']==true))
    {
        redirect('dashboard.php');
    }
?>
<html>
    <head>
        <title>
            Admin Login Panel
        </title>
        <?php require('include/links.php');?>
        <style>
            div.login-form{
                position: absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                width:350px;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="login-form text-center rounded bg-white shadow overflow-hidden">
            <form method="POST">
                <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
                <div class="p-4">
                      <div class="mb-3">
                        <input type="text" class="form-control shadow-none text-center" placeholder="Admin name" required name="admin_name" >
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control shadow-none text-center" placeholder="Password"  required name="admin_password">
                    </div>
                    <button name="login" type="submit" class="btn text-white custom-bg shadow-none">Login</button>
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['login']))
        {
            $filtered_data=filteration($_POST);
//            print_r($filtered_data);
            $query="SELECT * FROM `admin_info` WHERE `admin_name`=? AND `admin_password`=?";
            $values=[$filtered_data['admin_name'],$filtered_data['admin_password']];
//            $datatypes="ss";//both string types
            $res=select($query,$values,"ss");
            if($res->num_rows==1)
            {
                $row=mysqli_fetch_assoc($res);
                $_SESSION['Admin_Login']=true;
                $_SESSION['Admin_ID']=$row['sn'];
                redirect('dashboard.php');
            }
            else{
                alert('error','Login failed-Invalid Credentials!');
             }
        }
        ?>
         <?php include('include/scripts.php'); ?>
    </body>
</html> 