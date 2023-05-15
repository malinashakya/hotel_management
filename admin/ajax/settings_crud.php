<?php
    require('../include/db_config.php');
    require('../include/essentials.php');
    AdminLogin();
    if(isset($_POST['get_general']))
    {
        $query="SELECT * FROM `settings` WHERE `serial_num`=?";
        $values=[1];
        $result=select($query,$values,"i");
        $data=mysqli_fetch_assoc($result);
        $json_data_variable=json_encode($data);
        echo $json_data_variable;
    }

    if(isset($_POST['update_general']))
    {
        $form_data=filteration($_POST);
        $query="UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `serial_num`=?";
        $values=[$form_data['site_title'],$form_data['site_about'],1];
        $result=update($query,$values,'ssi');//string string integer
        echo $result;
    }
    if(isset($_POST['update_shutdown']))
    {
        $form_data=($_POST['update_shutdown']==0)?1:0;
        $query="UPDATE `settings` SET `shutdown`=? WHERE `serial_num`=?";
        $values=[$form_data,1];
        $result=update($query,$values,'ii');// integer
        echo $result;
    }

    if(isset($_POST['get_contacts']))
    {
        $query="SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values=[1];
        $result=select($query,$values,"i");
        $data=mysqli_fetch_assoc($result);
        $json_data_variable=json_encode($data);
        echo $json_data_variable;
    }

    if(isset($_POST['update_contacts']))
    {
        $form_data=filteration($_POST);
        $query="UPDATE `contact_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`insta`=?,`fb`=?,`tw`=?,`tik`=?,`iframe`=? WHERE `sr_no`=?";
        $values=[$form_data['address'],$form_data['gmap'],$form_data['pn1'],$form_data['pn2'],$form_data['email'],$form_data['insta'],$form_data['fb'],$form_data['tw'],$form_data['tik'],$form_data['iframe'],1];
        $result=update($query,$values,'ssssssssssi');//string string string string string string string string string integer
        echo $result;
    }
?>