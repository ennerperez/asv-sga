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
        
        //set default controller and method for legacy calls
        define('DEFAULT_CONTROLLER', 'welcome');
        define('DEFAULT_METHOD', 'index');

        //set the default template
        define('TEMPLATE', 'default');

        //set a default language
        define('LANGUAGE_CODE', 'es');
		setlocale(LC_TIME, "es_VE"); 

        //site address
        if ($_SERVER['HTTP_HOST'] == 'scoutsvenezuela.org.ve' ) {
            define('DIR', 'http://'.$_SERVER['HTTP_HOST'].'/sga/');
        }
        else{
            define('DIR', 'http://'.$_SERVER['HTTP_HOST'].'/');
        }

        //database details ONLY NEEDED IF USING A DATABASE
        define('DB_HOST', 'localhost');

         switch (ENVIRONMENT) {
             case 'development':
				define('DB_TYPE', 'mssql');
                define('DB_NAME', 'scouts');
                define('DB_USER', 'root');
                define('DB_PASS', '123456');
                define('PREFIX', '');
               break;
             default:
				define('DB_TYPE', 'mysql');
                define('DB_NAME', 'scoutsve_sga');
                define('DB_USER', 'scoutsve_sga');
                define('DB_PASS', '!@DDUA~wB;');
                define('PREFIX', 'sga_');
                break;
         }

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
