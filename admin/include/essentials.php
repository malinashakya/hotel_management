<?php
    function redirect($url)
    {
        echo "
        <script>window.location.href='$url';
        </script>
        ";
        exit;
    }
    function alert($type,$msg)
    {   //bootstrap ko lagi class determine garne
        $new_class=($type=="success")?"alert-success":"alert-danger";
            echo "
                <div class='alert $new_class alert-dismissible fade show custom-alert' role='alert'>
                    <strong class='me-3'>$msg</strong> Please check your username and password.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    }
    function AdminLogin()
    {
        session_start();
        if(!(isset($_SESSION['Admin_Login']) && $_SESSION['Admin_Login']==true))
        {
            echo "
            <script>window.location.href='index.php';
            </script>
            ";
            exit;
            // header("location:index.php");
        }
        //to make session more secure and it changes value of cookie while clicking in application, then cookies
        // session_regenerate_id(true);
    }
?>
