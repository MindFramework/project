<?php

/**
 *
 * @package    getSoftware
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Detecting an server software
 * @link       https://github.com/aliyilmaz/getSoftware
 *
 */
class getSoftware
{

   /**
     * Detecting an server software
     * @return string
     */
    public function getSoftware(){

        // Server software information
        $software = $_SERVER['SERVER_SOFTWARE'];

        // The software name is being determined.
        if (stristr($software, 'apac')) return 'Apache'; 
        if (stristr($software, 'micr')) return 'Microsoft-IIS'; 
        if (stristr($software, 'lites')) return 'LiteSpeed'; 
        if (stristr($software, 'nginx')) return 'Nginx';
        // It is stated to be undetected server software.
        return 'Unknown';
    }
}
