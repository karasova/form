<?php
    $deletefiles = [];
    $deletefiles = $_POST['deletes'];


    foreach ($deletefiles as $file){
        if (!empty($file)){
            if (substr($file, -3) === 'txt')
                unlink("formfiles/".$file);
            else
                echo "Файл " . $file . " нельзя удалить!";
        }
    } 

   

?>