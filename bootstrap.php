<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer XML
// $config = DoctrineSetup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'pawel123',
    'dbname'   => 'b2b-ecommerce',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
//
//// bootstrap.php
//require_once "vendor/autoload.php";
//
//use Doctrine\ORM\Tools\Setup;
//use Doctrine\ORM\EntityManager;
//
//$paths = array(__DIR__."/src/Entity");
//$isDevMode = false;
//
//// the connection configuration
//$dbParams =
//
//$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
//$entityManager = EntityManager::create($dbParams, $config);

