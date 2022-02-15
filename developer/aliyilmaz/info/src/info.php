<?php

/**
 *
 * @package    info
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Path information
 * @link       https://github.com/aliyilmaz/info
 *
 */
class info extends Mind
{

    /**
     * Path information
     *
     * @param string $fileName
     * @param string $type
     * @return bool|string
     */
    public function info($fileName, $type){

        if(empty($fileName) AND isset($type)){
            return false;
        }

        $object = pathinfo($fileName);

        if($type == 'extension'){
            return strtolower($object[$type]);
        }

        if($type == 'dirname'){
            return self::aliyilmaz('get_absolute_path')->get_absolute_path($object[$type]);
        }
        
        return $object[$type];
    }
}
