<?php


require '../vendor/autoload.php';
use Router\Router;

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Templates' . DIRECTORY_SEPARATOR);

//$container = new \DI\Container();
//$invoiceService = $container->get(\App\InvoiceService::class);
//echo $invoiceService->generate(14);
//$router = new Router();
//
//$router->get('/', ['Controllers\HomeController', 'index']);
//$router->get('/orders', ['Controllers\OrderController', 'index']);
//$router->post('/contact', ['Controllers\ContactController', 'store']);
//
//(new \Src\App($router,
//	[
//		'uri'    => $_SERVER['REQUEST_URI'],
//		'method' => $_SERVER['REQUEST_METHOD']
//	])
//)->run();

$parentReadfile = new \App\Liskov\ParentReadFile();
$childReadFile = new \App\Liskov\ChildReadFile();

echo $childReadFile->read('HTML'); exit;


$paymentController = new \Controllers\PaymentController();
$paypal = new \App\PaypalPayment();
$stripe = new \App\StripePayment();
$mongo = new \App\MangoPayPayment();

$pricePaypal = $paymentController->store(10, $paypal);
$priceStripe = $paymentController->store(10, $stripe);
$priceMongo = $paymentController->store(10, $mongo);
echo $pricePaypal;

echo '<br />';

echo $priceStripe;
echo '<br />';

echo $priceMongo;
exit;

$userController = new \Controllers\UserController();
echo $userController->show('Marc');
  echo '<br />';
echo $userController->show();






