<?php
// send POST request to JSON placeholder

// $url = 'https://jsonplaceholder.typicode.com';
// $urlParam = "/posts";
//
//
// $data = array("title" => "foo", "body" => "bar", "userId" => "1");
// $data_string = json_encode($data);
//
// $ch = curl_init($url.$urlParam);
//
//
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($data_string))
// );
//
// $result = curl_exec($ch);
// echo $result;

//download zip file
// $url = "http://ipv4.download.thinkbroadband.com/5MB.zip";
// $zipIntilize = curl_init();
// curl_setopt($zipIntilize, CURLOPT_URL, $url);
// curl_setopt($zipIntilize, CURLOPT_RETURNTRANSFER, 1);
// $data = curl_exec ($zipIntilize);
// curl_close ($zipIntilize);
//
// $destination = "./downloaded.zip";
// $fileUsed = fopen($destination, "w+");
// fputs($fileUsed, $data);
// fclose($fileUsed);



//flawed unZip method
// $zFile = new ZipArchive;
// if ( $zFile->open('CopyFile.zip') === TRUE){
//   echo $zFile->getFromIndex(0);
//   $zFile->close();
// } else {
//   echo 'failed';
// }

//Not yet completed fixeing errors
$zFile = zip_open("DanielaLab.zip");
echo "";
if ($zFile)
  {
    while ($zip_entry = zip_read($zFile))
    {
      $revealMe = fopen("DanielaLab".zip_entry_name($zip_entry), "w");
      if (zip_entry_open($zFile, $zip_entry, "r"))
        {
            $tone = zip_entry_read($zip_entry, zip_entry_file($zip_entry));

            fwrite($revealMe, "$tone");

            zip_entry_close($zip_entry);

            fclose($revealMe);
        }
    }
      zip_close($zFile);
  }

 //system('unzip DanielaLab.zip');


?>
