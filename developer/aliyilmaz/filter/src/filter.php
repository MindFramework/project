<?php

/**
 *
 * @package    filter
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Character cleaner.
 * @link       https://github.com/aliyilmaz/filter
 *
 */
class filter
{

    /**
     * Character cleaner.
     * 
     * @param string $str
     * @return string
     */
    public function filter($str){
        return htmlspecialchars($str);
    }
}
