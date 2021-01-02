<?php
namespace app;
require_once __DIR__.'/vendor/autoload.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

use app\core\Helper;
use app\core\Model;

$dbModel = new Model();
$helper = new Helper();

$viewData['result'] = $dbModel->insertData();
$viewData['seo']['pageTitle'] = 'Home';


$helper->renderView('home' , $viewData);





