<?php
/**
 * Implentation du gestionnaire d'error 
 */

define('APPLICATION_ENV', getenv('APPLICATION_ENV'));

set_error_handler(
	function($errno, $errstr)
	{
		if('development' === APPLICATION_ENV):
			echo 'Erreur _ gene : '.$errstr;
		else:
			echo 'Erreur general ';
		endif;
	}
);

set_exception_handler (
	function($e)
	{
		if('development' === APPLICATION_ENV):
			echo 'Exception _ gene : '.$e->getMessage();
		else:
			echo 'Exception general ';
		endif;
	}
);

/**
 * 
 * Implantation des chemin génériques
 * @var unknown_type
 */

define('DS', DIRECTORY_SEPARATOR);
define ('PS', PATH_SEPARATOR);
define ('ROOT_PATH',dirname(dirname(__FILE__)));
define ('LIBRARY_PATH', ROOT_PATH . DS . 'libray');
define ('CONFIG_PATH', ROOT_PATH . DS . 'application' . DS .'configs');
define ('APPLICATION_PATH', ROOT_PATH . DS . 'application');



set_include_path('/usr/local/zend/share/ZendFramework/library'. PS .LIBRARY_PATH );

require_once ('Zend/Application.php');

$application = new Zend_Application(APPLICATION_ENV,CONFIG_PATH. DS . 'application.ini');
$application->bootstrap()
			->run();


