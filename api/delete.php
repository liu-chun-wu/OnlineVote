<?
include_once "../setting.php";
$candidate = new DB('candidate');
$candidate->deleteById($_POST['id']);
to("../index.php");
