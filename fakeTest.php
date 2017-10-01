<?php

$url = 'https://jsonplaceholder.typicode.com';
$urlParam = "/posts";


$data = array("title" => "foo", "body" => "bar", "userId" => "1");
$data_string = json_encode($data);

$ch = curl_init($url.$urlParam);


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
echo $result;

// POST adds a random id to the object sent
// $.ajax('http://jsonplaceholder.typicode.com/posts', {
//   method: 'POST',
//   data: {
//     title: 'foo',
//     body: 'bar',
//     userId: 1
//   }
// }).then(function(data) {
//   console.log(data);
// });
//
// /* will return
// {
//   id: 101,
//   title: 'foo',
//   body: 'bar',
//   userId: 1
// }
// */



?>
