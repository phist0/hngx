<?php
$response = array();
$cdate =  gmdate("Y-m-d\TH:i:s\Z");
$cday = date ('l');
$github_file = "https://github.com/phist0/hngx/blob/main/api01.php";
$github_repo = "https://github.com/phist0/hngx";
$status = 200;
$slack_n = $_GET['slack_name']
$track_n = $_GET['track']	

// $response[0]["slack_name"] = "Papa Charlie";
$response[0]["slack_name"] = $slack_n;
$response[0]["current_day"] = $cday;
$response[0]["utc_time"] = $cdate;
// $response[0]["track"] = "backend";
$response[0]["track"] = $track_n
$response[0]["github_file_url"] = $github_file;
$response[0]["github_repo_url"] = $github_repo;
$response[0]["status_code"] = $status;


echo json_encode($response, JSON_PRETTY_PRINT);
