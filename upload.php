<?php
    include_once("functions.php");
    $file= $_FILES['files'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "photos/";

    foreach($fileName as $index => $name){
        if(CheckFileType ($fileType[$index])){
           if(CheckFileSize($fileSize[$index])){
               $targetDir = $dir.basename($fileName[$index]);
                if(CheckFile($targetDir)){
                    if(ChangeDirectory($fileTmpname[$index],$targetDir)){
                        echo "File is uploaded ",$fileName[$index],"<br>";
                        //echo "<img scr='uploads/".$file['name'][$index]."'>";
                    }
                }else{
                    echo "Not uploaded";
                }

           }else{
                echo "Size is too big";
           }
        }else{
            echo "invalid file";
        }
    }

    

    //scan "uploads" folder and display them accordingly
    $folder = "photos";
    $results = scandir('photos');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }

?>