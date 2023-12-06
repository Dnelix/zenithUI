<?php
##########################################
# BACK-END FUNCTIONS
##########################################
//RESPONSES
  // 500 - server error
  // 400 - invalid data
  // 401 - unauthorized
  // 404 - not found
  // 405 - invalid request
  // 409 - data conflict
  // 200 - success
  // 201 - record created

function responseServerException($e, $message){
  error_log("Connection error - ".$e, 0);

  $response = new Response();
  $response -> setHttpStatusCode(200); //change back to 500 for prod.
  $response -> setSuccess(false);
  //$response -> addMessage($message);
  $response -> addMessage($e); //optional. Remove for prod.
  $response -> send();
  exit(); 
}

function sendResponse($code, $state, $message = null, $returnData = null, $toCache = false){
  $code = 200; //Just to stop browser suppression. remove this line in production.
  $response = new Response();
  $response -> setHttpStatusCode($code);
  $response -> setSuccess($state);
  $response -> toCache($toCache);
  (($message !== null) ? $response -> addMessage($message) : false);
  (($returnData !== null) ? $response -> setData($returnData) : false);
  $response -> send();
  exit();
}

// AUTH
function generateTokens() {
  $accesstoken = base64_encode((bin2hex(openssl_random_pseudo_bytes(24))).time());
  $refreshtoken = base64_encode((bin2hex(openssl_random_pseudo_bytes(16))).time());
  $accesstoken_expiry = 12000; //20mins
  $refreshtoken_expiry = 1209600; //14 days (2 weeks)
  
  return array(
    'access_token' => $accesstoken,
    'refresh_token' => $refreshtoken,
    'access_token_expiry' => $accesstoken_expiry,
    'refresh_token_expiry' => $refreshtoken_expiry
  );
}

// JSON
function validateJsonRequest() {
  if ($_SERVER['CONTENT_TYPE'] !== 'application/json') {
    sendResponse(400, false, 'Content type header not set to JSON');
    exit();
  }
  //else get the json data
  $rawPostData = file_get_contents('php://input');
  if (!$jsonData = json_decode($rawPostData)) {
    sendResponse(400, false, 'Invalid JSON data in request body');
    exit();
  }

  return $jsonData;
}

//CACHE Responses
function retrieveAndCacheResponse($url, $cacheDuration = 120) {
  
  $cacheKey = md5($url); // Generate a unique cache key based on the API URL

  // Check if the cached response is still fresh on the client side
  if (isset($_SESSION['api_cache'][$cacheKey]) && (time() - $_SESSION['api_cache'][$cacheKey]['timestamp']) < $cacheDuration) {
      $jsonData = $_SESSION['api_cache'][$cacheKey]['response'];
  } else {
    
    $jsonData = json_decode(file_get_contents($url), false); // Make the API request and get the JSON data

    // Set cache-related headers
    header('Cache-Control: public, max-age=' . $cacheDuration);
    header('ETag: ' . $cacheKey);

    // Cache the response on the server side for future requests within the same session
    $_SESSION['api_cache'][$cacheKey] = array(
        'timestamp' => time(),
        'response' => $jsonData
    );
  }
  
  return $jsonData;
}

// Get JSON as either php object($stat = false) or array($stat = true)
function retrieveDataFrom($url='php://input', $stat = false, $auth=true){
  if($auth !== true){
    //for the rare case where we don't want to authenticate the GET request
    return json_decode(file_get_contents($url), $stat); 

  } else {
    $logToken = $_SESSION["accesstoken"];
    $context = stream_context_create([
      'http' => ['header' => "Authorization: $logToken\r\n",],
    ]);

    return json_decode(file_get_contents($url, false, $context), $stat);
  }
}


##########################################
# FRONT-END FUNCTIONS
##########################################
function showStatus($status){
  $status =  ucWords($status);
  switch ($status) {
    case 'Not Started':
    case 'Pending':
      $state = 'warning';
      break;
    case 'In Progress':
      $state = 'primary';
      break;
    case 'Failed':
    case 'Rejected':
      $state = 'danger';
      break;
    case 'Completed':
      $state = 'success';
      break;
    case 'Active':
      $state = 'success';
      break;
    case 'Inactive':
      $state = 'secondary';
      break;
    default:
      $state = 'warning';
      break;
  }

  $html = '<span class="badge badge-sm badge-dim bg-outline-'.$state.' d-md-inline-flex">'.$status.'</span>';

  echo $html;
}

function showHighlightCard($title, $content, $img, $size=8){
  return '
  <div class="card is-dark text-gray col-md-'.$size.'">
    <div class="card-inner">
        <div class="row">
            <div class="col-md-6" style="background-image: url(assets/images/zen/z1.png); background-size:cover">
                <img src="assets/images/'.$img.'" alt="'.$title.'">
            </div>
            <div class="col-md-6 pt-5">
                <h3>'.$title.'</h3>
                <p>'.$content.'</p>
                <a href="#more" class="btn btn-sm btn-outline-danger ">See More <em class="ni ni-arrow-down p-1"></em></a>
            </div>
        </div>
    </div>
  </div>
  ';
}

?>