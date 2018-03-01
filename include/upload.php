<?php
    $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

         $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'login_system';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
          
         $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
         $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')") ;
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File" ;
        } 
 
    
?>