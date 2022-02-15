<?php

/**
 *
 * @package    evalContainer
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   It is used to run Php codes.
 * @link       https://github.com/aliyilmaz/evalContainer
 *
 */
class evalContainer extends Mind
{

    /**
     * It is used to run Php codes.
     * 
     * @param string $code
     */
    public function evalContainer($code){

        // If there is a special character, it is decoded.
        if(self::aliyilmaz('is_htmlspecialchars')->is_htmlspecialchars($code)){
            $code = htmlspecialchars_decode($code);
        }
        // The code is run.
        ob_start(); eval('?>'. $code);
        
        // Work is assigned to variable
        $output = ob_get_contents();

        // It produces output where the method is called.
        ob_end_clean(); echo $output;

    }
}
