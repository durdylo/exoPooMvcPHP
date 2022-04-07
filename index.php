<?php
  
require_once  './vendor/autoload.php'; 

use App\Controller\FilmController;


$filmController = new FilmController();
$filmController->list();