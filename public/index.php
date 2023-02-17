<?php
use App\Autoloader;
use App\Core\Main;

session_start();



// On définit une constante contenant le dossier racine du projet
define('ROOT', dirname(__DIR__));

require_once ROOT.'/Core/General.php';





// On importe l'autoloader
require_once ROOT.'/Autoloader.php';
Autoloader::register();

// On instancie Main (notre routeur)
$app = new Main();

// On démarre l'application
$app->Start();


