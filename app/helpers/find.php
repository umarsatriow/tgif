<?php

/**
 * Find an array key in a multi-dimensional array
 *
 * @param   string  $key        The array key to be searched for
 * @param   array   $search     The array to perform the search on
 * @return  bool
 */
function array_key_exists_r($key, $search) {
    $result = array_key_exists($key, $search);
    if($result) {
        return $result;
    }
    foreach($search as $v) {
        if(is_array($v)) {
            $result = array_key_exists_r($key, $v);
        }
        if($result) {
            return $result;
        }
    }
    return $result;
}