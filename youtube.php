<?php
header('Content-Type: application/json');

$base_url = 'https://www.googleapis.com/youtube/v3/search';

$data = [
  'part' => 'snippet',
  'channelId' => 'UC0W20M_g6fQSvsNQ7mSGFlw',
  'order' => 'date',
  'maxResults' => '1',
  'key' => 'AIzaSyBfk_Wlm16-TfZXARG--uLtcsvW4T2-4IE',
];

$url = $base_url . "?" . http_build_query($data);

// echo($url);die();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$curl_response = curl_exec($curl);
curl_close($curl);
$curl_response_array = json_decode($curl_response, true);

// print_r($curl_response_array);
// die();

$response = [
  'imagen' => null,
];

if (!empty($curl_response_array['items'][0]['snippet']['thumbnails']['high']['url'])) {
    $response['imagen'] = $curl_response_array['items'][0]['snippet']['thumbnails']['high']['url'];
}

echo json_encode($response);
