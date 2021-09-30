<?php
/**
 * Class Autoloader
 */
class Autoloader
{

    
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        require 'models /' . $class . '.php';
    }
}