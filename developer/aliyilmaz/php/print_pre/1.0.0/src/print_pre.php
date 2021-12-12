<?php

/**
 *
 * @package    print_pre
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Pretty Print
 * @link       https://github.com/aliyilmaz/print_pre
 *
 */
class print_pre extends Mind{

    /**
     * Pretty Print
     * @param mixed $data
     */
    public function print_pre($data){

        if(self::aliyilmaz('php/is_json/1.0.0')->is_json($data)){
            $data = json_encode(json_decode($data, true), JSON_PRETTY_PRINT);
        }
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        return $this;
    }

}