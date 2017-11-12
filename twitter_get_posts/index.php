<?php

// Keys and tokens
$consumer_key = 'Z3tyA3shYBs0sc39BBKgdulmc';
$consumer_secret = '8IbW3nF1ea1JvoCLSD09M0xRLaXwzOOncfA2gLVEFG9z8YALdP';
$access_token = '1354643713-kJkl1n7CXY5IAcUeWVp5uXEWEqY3j1TPUhcFRaF';
$access_token_secret = 'qYVWwzOfScOZXcOXoMJ5rSVJnlQkvxmGjIYyKt5nxh6Qd';

// Include library
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Connect to API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $content = $connection->get("account/verify_credentials");

// // Create tweet
// $new_status = $connection->post("statuses/update", ["status" => "This is an awesome song.. Love this song.. https://www.youtube.com/watch?v=Juyh2yW3F4A"]);

// //Get tweet
// $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

// print_r($statuses);

$query = array(
 "q" => "#shrek",
 "count" => 10,
 "result_type" => "recent"
);
$tweets = $connection->get('search/tweets', $query);
foreach ($tweets->statuses as $tweet) {
 echo $tweet->id;
 echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';
}
?>