<?php

// modified from http://stackoverflow.com/a/36394832/121466
function crvlgt_has($object, $property){
    $properties = explode('->', $property);
    if($properties){
        foreach($properties as $val){
            if(isset($object->$val)){
                $object = $object->$val;
            } else{
                break;
            }
        }
    }
    if (!is_object($object) && $object) {
      return true;
    }
    return false;
}



// eof