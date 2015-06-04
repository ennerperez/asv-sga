<?php
namespace Core;

use Helpers\Session;

/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@simplemvcframework.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class Config
{
    public function __construct()
    {
        //turn on output buffering
        ob_start();

        //site address
        define('DIR', 'http://localhost/');

        //set default controller and method for legacy calls
        define('DEFAULT_CONTROLLER', 'welcome');
        define('DEFAULT_METHOD', 'index');

        //set the default template
        define('TEMPLATE', 'default');

        //set a default language
        define('LANGUAGE_CODE', 'es');

        //database details ONLY NEEDED IF USING A DATABASE
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'asv');
        define('DB_USER', 'root');
        define('DB_PASS', '123456');
        define('PREFIX', 'sga_');

        //set prefix for sessions
        define('SESSION_PREFIX', 'asv_');

        //optionall create a constant for the name of the site
        define('SITETITLE', ' Sistema de Gestión Administrativa');

        //optionall set a site email address
        //define('SITEEMAIL', '');

        //turn on custom error handling
        set_exception_handler('Core\Logger::ExceptionHandler');
        set_error_handler('Core\Logger::ErrorHandler');

        //set timezone
        date_default_timezone_set('America/Caracas');

        //start sessions
        Session::init();
    }
}
