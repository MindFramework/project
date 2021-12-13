<?php

/**
 *
 * @package    is_json
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Json control of a string
 * @link       https://github.com/aliyilmaz/is_json
 *
 */
class is_json
{

    /**
     * Json control of a string
     *
     * @param string $scheme
     * @return bool
     */
    function is_json($scheme){
        
        if(is_null($scheme) OR is_array($scheme)) {
            return false;
        }

        if(json_decode($scheme)){
            return true;
        }

        return false;
    }
}
