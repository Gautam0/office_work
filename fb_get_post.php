<?php
error_reporting(0);
/*xxxxclient_idxxx='your clientid'*/
/*xxxxxxclient_secretxxxx='your client_secret'*/
//Replace "YOUR-PAGE-NAME" with your page name.
// $access_str = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=xxxxclient_idxxx&client_secret=xxxxxxclient_secretxxxx&grant_type=client_credentials');
// $tokenarr = str_replace('"','',$access_str);
// $tokenarray = explode(":",str_replace(',',':', $tokenarr));
// var_dump($tokenarray);  //Request the public posts. 

$access_token = "EAACEdEose0cBAGEL1aMjkUbxwJnFmxHSfwgA1XzGmZAaMRytrKYFIrDNQ92AbUKQms7yiQnIHbnUEbeAUlrwjPgx4JhFsP1hMxyYpjWkG1aSTRCe4ASkuLOWGtStssDLiA75D3s3ZA2LdcHyUv8mpzhiEpNfDtWVTVVs9YGo0AaIJrwfZCcCZAkeSt42oMaLASZBBuOKhlgZDZD";

//Posts for only page posts
$json_str = file_get_contents('https://graph.facebook.com/kunsdsd/posts?access_token='.$access_token);


//Feed for if some user post on page and also for page posts
// $json_str = file_get_contents('https://graph.facebook.com/kunsdsd/feed?access_token='.$access_token);



// //For comment
// $json_str = file_get_contents('https://graph.facebook.com/kunsdsd/posts?access_token='.$access_token);

$data = json_decode($json_str);

// print_r($data);


// echo $data->data[0]->story;
// echo $data[0]['message'];
for ($i=0; $i < 10; $i++) { 
	echo $data->data[$i]->id."<br>";
	echo $data->data[$i]->message."<br>"."<br>";
}
// $i = 0;
// foreach ($data as $posts) {

// 	// var_dump($posts);
// 	echo $posts[$i]->message;
// 	$i = $i + 1;
// 	echo "<br>";
// }

/* PHP SDK v5.0.0 */
/* make the API call */
// require_once __DIR__ . '/Facebook/autoload.php';

// $fb = new Facebook\Facebook([
//   'app_id' => '1940364622880183',
//   'app_secret' => 'fc451e5a88b488f7512130b63eccc035',
//   'default_graph_version' => 'v2.10',
//   ]);


// try {
//   // Returns a `Facebook\FacebookResponse` object
//   $response = $fb->get(
//     '/356588894497264/posts',
//     'EAACEdEose0cBABENj1gEZAxGEHgKSVO3n1WAU4ZBWq6BofjEPYD3dU9DS2Cx5wtbL3CsjvmhZC4wY7UxRYwmeukzq5IvmzCWr3YgHE5jAIoCx7w10bCVrL4R5QOF8auLW5F1HTGGVmSyYrrD2wyuHqzDXPqjPCDZBjwhVuxkqBz5DOpJJ5UWNEXIekcLZAa3ocAMcn16WyQZDZD'
//   );
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }
// $graphNode = $response->getGraphNode();
// print_r($graphNode);

/* handle the result */

?>