<?php

// racine de l'appli 


// echo __FILE__ .'<br>';

// echo dirname(__FILE__).'<br>';

// echo dirname(dirname(__FILE__)).'<br>';

define('APPROOT', dirname(dirname(__FILE__)));

// racine des URLS

define('URLROOT', 'http://localhost:8888/BlogOO/'); // URL absolu 


// Titre du site 

define('SITENAME', 'Mini blog en POO');


// base de données 

define('DB_HOST','localhost');
define('DB_NAME','blogoo');
define('DB_USER','root');
define('DB_PASSWORD','root'); // MDP DE MAMP EST ROOT PAR DEFAUT