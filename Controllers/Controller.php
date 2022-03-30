<?php
//This file recieve request and send back the good page
include_once $_SERVER['DOCUMENT_ROOT'].'/Request.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Router.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Model/Repository.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Authenticator.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Environment.php';

$title = 'Adopte un stagiaire';
$repo = new Repository();
$authenticator = new Authenticator($repo);
$router = new Router(new Request, $repo, $authenticator);

//Prevent acces from file name
$router->get('/index.php', function() {
  include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
  die();
});

//Home
$router->get('/', function($request) {
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/home.php';
});

$router->get('/about', function($request) {

  include_once $_SERVER['DOCUMENT_ROOT'].'/views/about.php';
});


//All offers
$router->get('/offers', function($request, $repo) {

  $title = 'Adopte Un Stagiaire | Offers';
  $offers = $repo->getOffers();
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/offers.php';
});

//Mobile app
$router->get('/mobileApp', function($request) {

  $title = 'Adopte Un Stagiaire | Mobile App';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/mobileApp.php';
});

//Account
$router->get('/account', function($request) {

  $title = 'Adopte Un Stagiaire | My Account';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/account.php';
});

//Get log in page
$router->get("/login", function($request){
    $title += 'Adopte Un Stagiaire | Login';
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/login.php';
  });

//Login handler
$router->post('/login', function($request, $repo, $auth) {
    //Password check
    if($auth->tryLogin($request->getBody()['uid'], $request->getBody()['password'])){
  
      //Setting token in cookies, will expire with session
      setcookie('token', $auth->generateToken(), 0);
  
      //Redirect
      //header("Location: http://{$request->httpHost}/admin");
      die();
  
    }else{
      $error="Wrong credentials";
      include_once $_SERVER['DOCUMENT_ROOT'].'/views/login.php';
    }
  });