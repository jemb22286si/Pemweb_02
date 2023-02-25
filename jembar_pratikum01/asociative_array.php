<?php
$profileArray = [
    "nama" => "Jembar",
    "semester" => 4
];
echo $profileArray['nama'] . "<br>";
echo $profileArray["semester"] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Jembar",
        "semester" => 4
    ], [
        "nama" => "Romi",
        "semester" => 7
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}