<?php
header('Content-Type: application/json');

//Get Last Post ID
$base_url = 'https://graph.facebook.com/v2.7';
$complejo_dorins_page_id = '232214253501167';

$data = [
    'fields' => 'id,message',
    'limit' => '1',
    'access_token' => '571977239674701|e5g7hL6fgASyUIHbm329FeP-t8M',
];

$url = $base_url . "/" . $complejo_dorins_page_id. "/posts" . "?" . http_build_query($data);

// echo($url);die();
//Get Last Post ID
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$curl_response = curl_exec($curl);
curl_close($curl);
$curl_response_array = json_decode($curl_response, true);
$last_post_id = $curl_response_array['data'][0]['id'];

//Get Post PharData
$data = [
    'fields' => 'message,attachments',
    'limit' => '1',
    'access_token' => '571977239674701|e5g7hL6fgASyUIHbm329FeP-t8M',
];

$url = $base_url . "/" . $last_post_id . "?" . http_build_query($data);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$curl_response = curl_exec($curl);
curl_close($curl);
$curl_response_array = json_decode($curl_response, true);

// print_r($curl_response_array);
// die();

$response = [
  'mensaje' => null,
  'imagen' => null,
];

if (!empty($curl_response_array['message'])) {
    $response['mensaje'] = $curl_response_array['message'];
}

if (!empty($curl_response_array['attachments']['data'][0]['subattachments']['data'][0]['media']['image']['src'])) {
    $response['imagen'] = $curl_response_array['attachments']['data'][0]['subattachments']['data'][0]['media']['image']['src'];
} elseif (!empty($curl_response_array['attachments']['data'][0]['media']['image']['src'])) {
    $response['imagen'] = $curl_response_array['attachments']['data'][0]['media']['image']['src'];
}

echo json_encode($response);

// https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC0W20M_g6fQSvsNQ7mSGFlw&order=date&key={YOUR_API_KEY}
