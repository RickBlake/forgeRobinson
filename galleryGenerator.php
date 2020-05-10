<?php

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
    if (file_exists('../gapi-creds.json')) {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=../gapi-creds.json');
    }else {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=gapi-creds.json');
    }    

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

    $responseFolder = $client->get('drive/v2/files?q=\'' . $folderId . '\'+in+parents');
    $folderData = $responseFolder->getBody();
    $driveFolder = json_decode($folderData, true);
    $images = $driveFolder['items'];
    usort($images, 'cmp'); 

    foreach ($images as $imageFile) {
        $imagePath = "https://drive.google.com/uc?id=" . $imageFile['id'];
        $imageDescription = str_replace('"', '\'', $imageFile['description']) . " <br/><small>&copy; Simon Robinson " . date("Y") . " All rights reserved</small>";
    
?>
    <div class="gallery-item" data-src="<?php echo $imagePath; ?>"
        style="background-image: url('<?php echo $imagePath; ?>'), url('/img/loading.gif')"
        data-sub-html="<?php echo $imageDescription; ?>"
        data-pinterest-text="Work by Forge Robinson" data-tweet-text="Work by Forge Robinson"
        data-facebook-text="Work by Forge Robinson">

        <img src="<?php echo $imagePath; ?>" hidden/>
    </div>

<?php 
    } 
?>