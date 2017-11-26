<?php

require_once('Smarty.class.php');
require_once('vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$connectionParams = array(
    'dbname' => 'article_repository',
    'user' => 'user',
    'password' => 'toor',
    'host' => 'database_host',
    'port' => '3306',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

//$debug = true;
if ($debug) {
    $entityManager->getConnection()
      ->getConfiguration()
      ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
}

$smarty = new Smarty();

$smarty->setTemplateDir('/code/templates/');
$smarty->setCompileDir('/code/templates_c/');
$smarty->setConfigDir('/code/configs/');
$smarty->setCacheDir('/code/cache/');

$smarty->assign('CONTROLLER_PATH','src/controller');

//** un-comment the following line to show the debug console
$smarty->debugging = true;


?>
