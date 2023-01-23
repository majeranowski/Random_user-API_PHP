<?php
//getting an email address of random user with included error handling

$response = file_get_contents("https://randomuser.me/api/");
if ($response === false) {
    echo "Sorry, the request could not be completed.";
    exit;
}
//decoding response and storing as an object in variable $data
$data = json_decode($response);
if (isset($data->error)) {
    echo $data->error;
    exit;
}
echo $data->results[0]->email;