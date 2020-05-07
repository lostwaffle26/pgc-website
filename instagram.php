<?php 
$url = 'https://api.instagram.com/v1/users/XXXX?access_token=XXXX';
$api_response = file_get_contents($url);
$record = json_decode($api_response);
echo $record->data->counts->followed_by;
