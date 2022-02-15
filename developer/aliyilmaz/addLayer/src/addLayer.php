<?php

/**
 *
 * @package    addLayer
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Layer installer
 * @link       https://github.com/aliyilmaz/addLayer
 *
 */
class addLayer extends Mind
{

    /**
     * Layer installer
     *
     * @param string|array|null $file
     * @param string|array|null $cache
     */

     public function addLayer($file = null, $cache = null){
        
        // layer extension
        $ext = '.php';

        // layer set
        $layers = [];

        // temporary layers
        $tempLayers = [];

        // Cache layers are taken into account
        if(!is_null($cache) AND !is_array($cache)) $layers[] = $cache;
        if(!is_null($cache) AND is_array($cache)) foreach($cache as $c) { $layers[] = $c; }

        // File layers are taken into account
        if(!is_null($file) AND !is_array($file)) $layers[] = $file;
        if(!is_null($file) AND is_array($file)) foreach($file as $f) { $layers[] = $f; }

        // All layers are run sequentially
        foreach ($layers as $key => $layer) {
            $tempLayers[$key] = self::aliyilmaz('wayMaker')->wayMaker($layer);
        }

        // Layers are being processed
        foreach ($tempLayers as $layer) {
            
            // Checking for layer existence
            if(file_exists($layer['way'].$ext)) {
                require_once($layer['way'].$ext);
            
                // The class name is extracted from the layer path
                $className = $this->getWayClassName($layer['way']);

                // If the class exists, it is assigned to the variable
                if(class_exists($className)){ $class = new $className(self::$conf);
                    
                    // If the method exists, it is executed.
                    if(isset($layer['params'])){ foreach ($layer['params'] as $param) { $class->$param(); } }

                }
            }
            
        }

     }

     public function getWayClassName($way){
         return basename($way);
     }
}
