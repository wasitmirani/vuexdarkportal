<?php


function getIconImg($file,$type){
    switch ($type) {
        case 'png':
            return asset('icons/'.$file.".".$type);
        break;
        case 'webp':
            return asset('icons/'.$file.".".$type);
        break;
        default:
        return asset('icons/'.$file);
        break;
    }

}


?>
