<?php 

require_once '../vendor/autoload.php';

use Google\Auth\ApplicationDefaultCredentials;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Photos\Library\V1\PhotosLibraryClient;
use Google\Photos\Library\V1\PhotosLibraryResourceFactory;

function cmp($a, $b) {
    $order1 = intval(str_replace('.jpg', '', $a['title']));
    $order2 = intval(str_replace('.jpg', '', $b['title']));

    return $order1 > $order2;
}

// specify the path to your application credentials
putenv('GOOGLE_APPLICATION_CREDENTIALS=../gapi-creds.json');

// define the scopes for your API call
$scopes = ['https://www.googleapis.com/auth/drive'];

// create middleware
$middleware = ApplicationDefaultCredentials::getMiddleware($scopes);
$stack = HandlerStack::create();
$stack->push($middleware);

// create the HTTP client
$client = new Client([
    'handler' => $stack,
    'base_uri' => 'https://www.googleapis.com',
    'auth' => 'google_auth'  // authorize all requests
]);

?>