<?php
/**
 * Date format
 */
function formatDate($date){
    $date = date("F j, Y, g:i a", strtotime($date));
    return $date;
}


/**
 * url format
 */
function urlFormat($str){
    //strip out all white space
    $str = preg_replace('/\s*/', '', $str);

    //conver the string to all lowercase
    $str = strtolower($str);

    //URL Encode
    $str = urlencode($str);
    return $str;
}

/**
 * add classname active if category is active
 */
function is_active($category){
    if(isset($_GET['category'])){
        if($_GET['category'] == $category){
            return 'active';
        }else{
            return '';
        }
    }else{
        if($category == null){
            return 'active';
        }
    }
}