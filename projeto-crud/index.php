<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'app/controllers/AutorController.php';
require 'app/controllers/LivroController.php';


//$autor = new AutorController();
//$autor->index();

$livro = new LivroController();
$livro->index();