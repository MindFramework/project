<?php

/**
 *
 * @package    mediaInfo
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Provides media information.
 * @link       https://github.com/aliyilmaz/mediaInfo
 *
 */
class mediaInfo extends Mind
{

    /**
     * Provides media information.
     * @param string $filePath
     * @return array
     */
    function mediaInfo($filePath){
        require_once('./developer/'.self::$path.'/getID3/getid3/getid3.php');
        $getID3 = new getID3;
        return $getID3->analyze($filePath);
    }
}
