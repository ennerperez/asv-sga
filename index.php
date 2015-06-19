<?php
    if (file_exists('vendor/autoload.php')) {
        require 'vendor/autoload.php';
    } else {
        echo "<h1>Please install via composer.json</h1>";
        echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
        echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
        exit;
    }
    if (!is_readable('app/Core/Config.php')) {
        die('No Config.php found, configure and rename Config.example.php to Config.php in app/Core.');
    }
    /*
     *---------------------------------------------------------------
     * APPLICATION ENVIRONMENT
     *---------------------------------------------------------------
     *
     * You can load different configurations depending on your
     * current environment. Setting the environment also influences
     * things like logging and error reporting.
     *
     * This can be set to anything, but default usage is:
     *
     *     development
     *     production
     *
     * NOTE: If you change these, also change the error_reporting() code below
     *
     */
    if ($_SERVER['HTTP_HOST'] == 'scoutsvenezuela.org.ve' ) {
        define('ENVIRONMENT', 'production');
        }
    else{
        define('ENVIRONMENT', 'development');
        }
    
    /*
     *---------------------------------------------------------------
     * ERROR REPORTING
     *---------------------------------------------------------------
     *
     * Different environments will require different levels of error reporting.
     * By default development will show errors but production will hide them.
     */
    if (defined('ENVIRONMENT')) {
        switch (ENVIRONMENT) {
            case 'development':
                error_reporting(E_ALL);
                break;
            case 'production':
                error_reporting(0);
                break;
            default:
                exit('The application environment is not set correctly.');
        }
    }
    //initiate config
    new Core\Config();
    //create alias for Router
    use Core\Router;
    use Helpers\Hooks;
    //define routes
    Router::any('', 'Controllers\Inicio@index');
    Router::any('admin', 'Controllers\Inicio@dashboard');
    //Router::any('login', 'Controllers\Admin@login');
    Router::get('login', 'Controllers\Admin@login');
    Router::post('login', 'Controllers\Admin@login');
    Router::get('logout', 'Controllers\Admin@logout');
    //Router::any('logout', 'Controllers\Admin@logout');
    Router::any('estructura', 'Controllers\Estructura@index');
    Router::any('regiones', 'Controllers\Estructura@regiones');
    Router::any('distritos', 'Controllers\Estructura@distritos');
    Router::any('grupos', 'Controllers\Estructura@grupos');
    Router::any('grupos/nuevo', 'Controllers\Estructura@nuevo_grupo');
    Router::any('patrullas', 'Controllers\Estructura@patrullas');
    Router::any('areas', 'Controllers\Estructura@areas');
    Router::any('directorio', 'Controllers\Directorio@index');
    Router::any('adultos', 'Controllers\Directorio@adultos');
    Router::any('adultos/nuevo', 'Controllers\Directorio@nuevo_adulto');
    Router::any('jovenes', 'Controllers\Directorio@jovenes');
    Router::any('patrocinantes', 'Controllers\Directorio@patrocinantes');
    Router::any('usuarios', 'Controllers\Directorio@usuarios');
    //module routes
    $hooks = Hooks::get();
    $hooks->run('routes');
    //if no route found
    Router::error('Core\Error@index');
    //turn on old style routing
    Router::$fallback = false;
    //execute matched routes
    Router::dispatch();
