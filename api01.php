<?php
$response = array();
$cdate =  gmdate("Y-m-d\TH:i:s\Z");
$cday = date ('l');
$github_file = "https://github/file";
$github_repo = "https://github/repo";
$status = 200;

$response[0]["slack_name"] = "Papa Charlie";
$response[0]["current_day"] = $cday;
$response[0]["utc_time"] = $cdate;
$response[0]["track"] = "backend";
$response[0]["github_file_url"] = $github_file;
$response[0]["github_repo_url"] = $github_repo;
$response[0]["status_code"] = $status;


echo json_encode($response, JSON_PRETTY_PRINT);
