<?php
//Prevent file access
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}

$variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'adopteunstagiaire',
    'DB_PORT' => '3306',
    'DB_APPLICATION_TABLE' => 'application',
    'DB_ASSIGN_TABLE' => 'assign',
    'DB_COMPANY_TABLE' => 'company',
    'DB_CONCERN_TABLE' => 'concern',
    'DB_INCLUDE_TABLE' => 'include',
    'DB_LOCATION_TABLE' => 'location',
    'DB_OFFER_TABLE' => 'offer',
    'DB_PERMISSION_TABLE' => 'permission',
    'DB_PROMOTION_TABLE' => 'promotion',
    'DB_RATING_TABLE' => 'rating',
    'DB_ROLE_TABLE' => 'role',
    'DB_WISHLIST_TABLE' => 'save',
    'DB_SETTLE_TABLE' => 'settle',
    'DB_USER_TABLE' => 'user',
];

//Set the env variable
foreach ($variables as $key => $value) {
    putenv("$key=$value");
}

//Function to retrieve them with null when empty
function env($key, $default = null)
    {
        $value = getenv($key);
        return ($value === false ? $default : $value);
    }
?>