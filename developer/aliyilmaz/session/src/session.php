<?php

/**
 *
 * @package    session
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Session
 * @link       https://github.com/aliyilmaz/session
 *
 */
class session extends Mind
{

    public $options  =  array(
        'path'   =>  '',
        'status' =>  true
    );

    /**
     * The method of defining the path where the 
     * session data will be hosted.
     * @param string|null $path
     */
    public function setPath($path = null)
    {
        if(!empty($this->options['path'])) { $path = $this->options['path']; } 
        
        if(!is_null($path)) { 

            // If the directory does not exist, it is created.
            if(!is_dir($path)){ mkdir($path, 0755); }
    
            // If the directory exists, it is defined to the system session path.
            if(is_dir($path)) { ini_set('session.save_path', $path); }

        } 

        return $this;
    }

    /**
     * Session initiation method.
     */
    public function start(){
        
        if($this->options['status']) { 
            if(!empty($this->options['path'])) $this->setPath($this->options['path']);
            if(!isset($_SESSION)) { session_start(); }
        }

    }

    /**
     * @param string|null $conf['session]['path]
     * @param bool|null $conf['session]['status]
     */
    public function __construct($conf = null){
        if(isset($conf['session']['path'])) { $this->options['path'] = $conf['session']['path']; }
        if(isset($conf['session']['status'])) { $this->options['status'] = $conf['session']['status']; }
    }
}
