<?php


class ImageSlider
{
    public static function ImageSliderWebsite($image,$path){
        $upload = 1;
        $image_new = $image['name'];
        $directory = $path;
        $target_file = $directory.basename($image_new);
        $file_type = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($file_type!=="jpg" && $file_type!=="png" && $file_type!=="gif"){
            $upload = 0;
            echo "this is not picture";
        }

        if ($upload==1){
            if (move_uploaded_file($image['tmp_name'],$target_file)){
                echo "done";
            }
        }
        return $image_new;
    }
}