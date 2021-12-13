<?php

/**
 *
 * @package    getOS
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Detecting an operating system
 * @link       https://github.com/aliyilmaz/getOS
 *
 */
class getOS
{

    /**
     * Detecting an operating system
     * @return string
     */
    function getOS(){
        $os = PHP_OS;
        switch (true) {
            case stristr($os, 'dar'): return 'Darwin';
            case stristr($os, 'win'): return 'Windows';
            case stristr($os, 'lin'): return 'Linux';
            default : return 'Unknown';
        }
    }
}
