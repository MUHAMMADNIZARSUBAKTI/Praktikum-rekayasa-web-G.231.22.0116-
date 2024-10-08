<?php
// memebuat variabel array
$arrayData = [
    "nama" => "Nizar",
    "Usia" => 20,
    "pekerjaan" => "Clening Servoce",
    "Hobi" => ["Bermain Game", "Makan"]
];
$arrayData1 = '{
    "nama" : "Nizar",
    "Usia" : 20,
    "pekerjaan" : "Clening Servoce",
    "Hobi" : "Bermain Game"
}';
// encode array ke format Json
$jsonData = json_encode ($arrayData);
echo "data dalam format JSON: ". $jsonData. "<br><br>";

// Decode JSON kembali ke array 
$decodeData = json_decode ($arrayData1);
echo "data dalam format Array: ";
echo "nama: ". $decodeData->nama;
echo ", usia: ". $decodeData->Usia;
echo ", pekerjaan: ". $decodeData->pekerjaan;
echo ", hobi: ". $decodeData->Hobi;
?>