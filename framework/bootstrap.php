<?php

class Custom_Autoloader
{
    public static function custom_autoload($class)
    {
        $class = str_replace('\\', DS, $class);

        // Fallback logic
        $autoloadPaths = array(
            APP_ROOT . DS . 'framework' . DS . $class . '.php',
            APP_ROOT . DS . 'app' . DS . 'code' . DS . 'Modules' . DS . $class . '.php',
            APP_ROOT . DS . 'lib' . DS . $class . '.php'
        );
        foreach ($autoloadPaths as $path) {
            if (file_exists($path)) {
                require $path;
                break;
            }
        }
    }
}
spl_autoload_register(array('Custom_Autoloader','custom_autoload'));
