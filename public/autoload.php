<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'app'.DS);
define("CORE",APP.'Core'.DS);
define("CONFIG",APP.'Config'.DS);
define("HELPERS",APP.'Helpers'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("MODELS",APP.'Models'.DS);
define("VIEWS",APP.'Views'.DS);
define("ROUTES",APP.'Routes'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);


// configuration files
require_once(CONFIG.'config.php');
require_once(HELPERS . 'helpers.php');
//require_once(ROUTES.'web.php');




// autoload all classes
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG,ROUTES];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload',true);


require_once('app/Routes/web.php');

