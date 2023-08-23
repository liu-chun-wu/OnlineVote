<?
include_once "../setting.php";
$candidate = new DB('candidate');
$message = $candidate->all();
echo json_encode($message);
