<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="malsha";
    $con=mysqli_connect($hostname,$username,$password,$database);
    if(!$con)
    {
        die("Connection Error".mysqli_connect_error());
    }
    function filteration($data)
    {
        foreach($data as $key => $value)
        {
//            stripcslashes- used to remove slashes
//            htmlspecialchars- convert special character to entitites
//            strip_tags- disable html tags
            $data[$key]=trim($value);
            $data[$key]=stripcslashes($value);
            $data[$key]=htmlspecialchars($value);
            $data[$key]=strip_tags($value);
        }
        return $data;
    }
    function  select($sql,$values,$datatypes)
    {
        $con=$GLOBALS['con'];//to make $con gloabl
        if($prepared=mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($prepared,$datatypes,...$values);
                //... is splat operator which means we can pass multiple values
            if(mysqli_stmt_execute($prepared))
            {
                $result=mysqli_stmt_get_result($prepared);
                mysqli_stmt_close($prepared);  
                return $result;
            }
            else
            {
                  mysqli_stmt_close($prepared);   
                die("Query cannot be executed--Select");
            }
           
        }
        else
        {
            die("Query cannot be prepared--Select");
        }
    }
    function  update($sql,$values,$datatypes)
    {
        $con=$GLOBALS['con'];//to make $con gloabl
        if($prepared=mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($prepared,$datatypes,...$values);
                //... is splat operator which means we can pass multiple values
            if(mysqli_stmt_execute($prepared))
            {
                $result=mysqli_stmt_affected_rows($prepared);
                mysqli_stmt_close($prepared);  
                return $result;
            }
            else
            {
                  mysqli_stmt_close($prepared);   
                die("Query cannot be executed--Update");
            }
           
        }
        else
        {
            die("Query cannot be prepared--Update");
        }
    }
        

?>