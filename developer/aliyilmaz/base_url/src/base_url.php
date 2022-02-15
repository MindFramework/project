<?php

/**
 *
 * @package    base_url
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   It is used to get the project home directory path.
 * @link       https://github.com/aliyilmaz/base_url
 *
 */
class base_url extends Mind
{

    /**
     * @return string
     */
    function base_url(){

        // Creating the absolute path of the project.
        $dir = self::aliyilmaz('get_absolute_path')->get_absolute_path(dirname($_SERVER['SCRIPT_NAME']));    
        
        // The project path is made available.
        $output = (empty($dir)) ? '/' : '/'.$dir.'/';
        
        return $output;
    }
}
