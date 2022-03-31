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

//Add offer
$router->get('/addOffer', function($request) {
  
  $title = 'Adopte Un Stagiaire | Add an offer';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/addOffer.php';
});

$router->post('/addOffer', function($request, $repo) {
  
  $error = $repo->addOffer($request->getBody());
  if($error){
    $title = 'Adopte Un Stagiaire | Add an offer';
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/addOffer.php';
  }else{
    //Redirect
    header("Location: /");
    die();
  }
});

//All companies
$router->get('/companies', function($request, $repo) {

  $title = 'Adopte Un Stagiaire | Companies';
  $companies = $repo->getCompanies();
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/companies.php';
});

//Add a company
$router->get('/addCompany', function($request) {

  $title = 'Adopte Un Stagiaire | Add a company';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/addCompany.php';
});

$router->post('/addCompany', function($request, $repo) {
  
  $error = $repo->addCompany($request->getBody());
  if($error){
    $title = 'Adopte Un Stagiaire | Add a company';
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/addCompany.php';
  }else{
    //Redirect
    header("Location: /");
    die();
  }
});

//Mobile app
$router->get('/mobileApp', function($request) {

  $title = 'Adopte Un Stagiaire | Mobile App';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/mobileApp.php';
});

//Account
$router->get('/account', function($request, $repo, $authenticator) {
  //if user is connected
  if(isset($_COOKIE["token"])){
    $user = $authenticator->validateToken($_COOKIE["token"]);
  }
  if($user){
    $title = 'Adopte Un Stagiaire | My Account';
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/account.php';
  } else {
    //redirect to signin route
    header('Location: signIn');
  }
});

//Get log in page
$router->get("/signOut", function($request){
  if(isset($_COOKIE['token'])){
    unset($_COOKIE['token']);
    setcookie('token', null, -1, '/');
  }
  //Redirect
  header("Location: /");
  die();
});

//Get log in page
$router->get("/signIn", function($request){
  $title = 'Adopte Un Stagiaire | Sign In';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/signIn.php';
});

//Login handler
$router->post('/signIn', function($request, $repo, $authenticator) {
  //Password check
  if($authenticator->signIn($request->getBody()['user_mail'], $request->getBody()['user_password'])){

    //Setting token in cookies, will expire with session
    setcookie('token', $authenticator->generateToken($request->getBody()['user_mail']), 0);

    //Redirect
    header("Location: /");
    die();

  }else{
    $title = 'Adopte Un Stagiaire | Sign In';
    $error="Wrong credentials";
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/signIn.php';
  }
});

//Get the register page
$router->get("/register", function($request){
  $title = 'Adopte Un Stagiaire | Register';
  include_once $_SERVER['DOCUMENT_ROOT'].'/views/register.php';
});

//Get the register page
$router->post("/register", function($request, $repo, $authenticator){
  $error = $authenticator->register($request->getBody());
  if(!$error){

    //Setting token in cookies, will expire with session
    setcookie('token', $authenticator->generateToken($request->getBody()['user_mail']), 0);

    //Redirect
    header("Location: /");
    die();
  }else{
    include_once $_SERVER['DOCUMENT_ROOT'].'/views/register.php';
  }
});