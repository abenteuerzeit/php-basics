<?php


// https://github.com/public-apis/public-apis 

$response = file_get_contents("https://codecademy.com");
if ($response === false) {
    echo "Something went wrong!";
}

$data = json_decode($response, true); // decode response
if (isset($data['error'])) {
  echo 'Error: ' . $data['error']; // print error message
} else {
  echo 'Phone Number: ' . $data['results'][0]['phone']; // print phone number
}


// https://randomuser.me/documentation
$user_response = file_get_contents("https://randomuser.me/api/?results=5");
echo $user_response;

$data_object = json_decode($user_response);
echo $data_object->info->version;

$data_array = json_decode($user_response, true);
echo $data_array['info']['version'];
echo $data_array['results'][0]['email'];


$response = file_get_contents("https://randomuser.me/api/");
if ($response === false) {
    echo "Sorry, the request could not be completed.";
    exit;
}
$data = json_decode($response);
if (isset($data->error)) {
    echo $data->error;
    exit;
}
echo $data->results[0]->email;