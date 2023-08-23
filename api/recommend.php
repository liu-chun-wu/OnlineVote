<?
include_once "../setting.php";
$candidate = new DB('candidate');
$candidate->createByArray($_POST);
to("../index.php");
