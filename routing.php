<?php
    
    //initiate config
    new Core\Config();
    //create alias for Router
    use Core\Router;
    use Helpers\Hooks;

    // Basic

    Router::any('login', 'Controllers\Admin@login');
    Router::get('logout', 'Controllers\Admin@logout');
    Router::any('admin/registro', 'Controllers\Admin@registro');
    Router::any('admin/registro/logout', 'Controllers\Admin@logout');
    
    // Main

    Router::any('', 'Controllers\Inicio@index');
    Router::any('admin', 'Controllers\Inicio@dashboard');

    // Sections

    Router::any('estructura', 'Controllers\Estructura@index');
    Router::any('regiones', 'Controllers\Estructura@regiones');  
    Router::any('distritos', 'Controllers\Estructura@distritos');
    Router::any('grupos', 'Controllers\Estructura@grupos');
    Router::any('patrullas', 'Controllers\Estructura@patrullas');
    Router::any('areas', 'Controllers\Estructura@areas');

    // Directorio

    Router::any('directorio', 'Controllers\Directorio@index');
    Router::any('adultos', 'Controllers\Directorio@adultos');
    Router::any('jovenes', 'Controllers\Directorio@jovenes');
    Router::any('patrocinantes', 'Controllers\Directorio@patrocinantes');
    Router::any('usuarios', 'Controllers\Directorio@usuarios');

    // Actions

    Router::any('grupos/nuevo', 'Controllers\Estructura@nuevo_grupo');

    //Router::any('directorio/anual', 'Controllers\Directorio@distribucion');
    Router::any('adultos/nuevo', 'Controllers\Directorio@nuevo_adulto');
    Router::any('adultos/guardar', 'Controllers\Directorio@guardar_adulto');

    // API
    
    // PUBLIC

    Router::any('api/'.APIVERSION.'/get/regiones', 'Controllers\Estructura@get_regiones');
    Router::any('api/'.APIVERSION.'/get/distritos', 'Controllers\Estructura@get_distritos');
    Router::any('api/'.APIVERSION.'/get/grupos', 'Controllers\Estructura@get_grupos');     
    Router::any('api/'.APIVERSION.'/get/areas', 'Controllers\Estructura@get_areas');     

    Router::any('api/'.APIVERSION.'/get/creencias', 'Controllers\Directorio@get_creencias');
    Router::any('api/'.APIVERSION.'/get/ocupaciones', 'Controllers\Directorio@get_ocupaciones');

    //module routes
    $hooks = Hooks::get();
    $hooks->run('routes');
    //if no route found
    Router::error('Core\Error@index');
    //turn on old style routing
    Router::$fallback = false;
    //execute matched routes
    Router::dispatch();