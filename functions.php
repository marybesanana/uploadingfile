<?php
    function CheckFileType($file){
        $allowed = array('jpeg', 'jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function CheckFileSize($file){
        return ($file <= 10000000) ? true : false;
    }

    function CheckFile($file){
        return (!file_exists($file)) ? true : false;
    }

    function ChangeDirectory($file,$target){
        return move_uploaded_file($file,$target);
    }
   
?>