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

// $json_str = file_get_contents('https://graph.facebook.com/1934787893514035/1934787893514035_1934794090180082/comments/?access_token='.$access_token.'&message=hello');
// // $data = json_decode($json_str);

// // print_r($data);


// // echo $data->data[0]->story;
// // echo $data[0]['message'];
// for ($i=0; $i < 10; $i++) { 
// 	echo $data->data[$i]->id."<br>";
// 	echo $data->data[$i]->message."<br>"."<br>";
// }
$message = "Wonderful222..";
$url = 'https://graph.facebook.com/1934794090180082_1934882310171260/comments?access_token='.$access_token.'&message='.$message;

// $data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        // 'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>