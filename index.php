<?php

include('CryptoCurrency.php');
include('WSResponse.php');

// Time between messages in seconds
define('TIME', 60);

function sendMessage($text) {
	// Substitute here your token and chat ID
	$TOKEN = '';
	$CHAT_ID = '';
	$URL = "https://api.telegram.org/bot$TOKEN";

	$query = http_build_query(array(
		'chat_id' => $CHAT_ID,
		'text' => $text
	));

	file_get_contents("$URL/sendMessage?$query");
}


$userMessage = json_decode(file_get_contents("php://input"), true);
$userMessage = $userMessage['message']['text'];

if ($userMessage == '#START') {
	while (true) {
		// Get cryto-currencies info from Web Service
		$info = file_get_contents('https://api.coinmarketcap.com/v2/ticker/?limit=5');
		$info = json_decode($info, true);

		// Parse response
		$response = new WSResponse($info['data'], $info['metadata']);

		if ($response->metadata['error'] == null) {
			// Array containing crypto-currencies objects
			$cryptoCurrencies = array();

			// Extract currencies info and create objects
			foreach ($response->data as $currency) {
				$cryptoCurrency = new CryptoCurrency($currency['name'], $currency['symbol'], $currency['rank'], $currency['quotes']['USD']['price']);
				array_push($cryptoCurrencies, $cryptoCurrency);
			}

			// Message to be sent
			$text = "Top 5 crypto-currencies right now:\n";
			foreach ($cryptoCurrencies as $cryptoCurrency) {
				$text .= "\n".$cryptoCurrency->name." (".$cryptoCurrency->symbol."): $".$cryptoCurrency->price;
			}

			sendMessage($text);
		}
		sleep(TIME);
	}
} else {
	sendMessage("Please, try again");
}

?>