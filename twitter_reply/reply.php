<?php

	// Keys and tokens
// $consumer_key = 'Z3tyA3shYBs0sc39BBKgdulmc';
// $consumer_secret = '8IbW3nF1ea1JvoCLSD09M0xRLaXwzOOncfA2gLVEFG9z8YALdP';
// $access_token = '1354643713-kJkl1n7CXY5IAcUeWVp5uXEWEqY3j1TPUhcFRaF';
// $access_token_secret = 'qYVWwzOfScOZXcOXoMJ5rSVJnlQkvxmGjIYyKt5nxh6Qd';

// // Include library
// require "twitteroauth/autoload.php";
// use Abraham\TwitterOAuth\TwitterOAuth;

// // Connect to API
// $tweet = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $id = '928124929521876993';
// $tweetMessage = "@Gautam000000 this is a test message.. :)"
// $tweet->post('statuses/update', array('status' => $tweetMessage, 'in_reply_to_status_id' => $id));


// $query = array(
//  "q" => "icc",
//  "count" => 10,
//  "result_type" => "recent"
// );
// $tweets = $connection->get('search/tweets', $query);
// foreach ($tweets->statuses as $tweet) {
//  echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';

	 // $tweet = new TwitterOAuth($consumerKey, $consumerSecret, $uact, $uacts);

require_once('TwitterAPIExchange.php');

$settings = array(
	'oauth_access_token' => '1354643713-kJkl1n7CXY5IAcUeWVp5uXEWEqY3j1TPUhcFRaF',
	'oauth_access_token_secret' => 'qYVWwzOfScOZXcOXoMJ5rSVJnlQkvxmGjIYyKt5nxh6Qd',
	'consumer_key' => 'Z3tyA3shYBs0sc39BBKgdulmc',
	'consumer_secret' => '8IbW3nF1ea1JvoCLSD09M0xRLaXwzOOncfA2gLVEFG9z8YALdP'
);

$url = 'https://api.twitter.com/1.1/statuses/update.json';
$postfields = array(
	'in_reply_to_status_id' => '929257745328623616', 
	'status' => '@ytv Wonderful... '
);

$requestMethod = 'POST';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setPostfields($postfields)
	->buildOauth($url, $requestMethod)
	->performRequest();


?>