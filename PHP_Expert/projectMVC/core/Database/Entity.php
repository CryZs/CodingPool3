<?php

namespace Core\Database;

abstract class Entity implements \JsonSerializable {
    function jsonSerialize(){
        $data = [];
        foreach ($this as $key => $value){
            $data[$key] = $value;
        }
        return $data;
    }
}