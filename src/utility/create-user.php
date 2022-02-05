<?php

require_once '../vendor/autoload.php';

require_once '../bootstrap.php';

[$filename, $username, $password] = $argv;

$user = new \App\Entity\User();


$user->setUsername($username);
$user->setPassword(password_hash($password, PASSWORD_DEFAULT));

/** EntityManager $em */
$em = $entityManager;

$em->persist($user);
$em->flush();

echo sprintf('Created useer with id %s', $user->getId());


