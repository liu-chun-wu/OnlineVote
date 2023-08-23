<?
include_once "../setting.php";
$candidate = new DB('candidate');
$target = $candidate->findById($_POST['id']);
$vote = $target['score'];
$vote++;
$candidate->updateByArray(['score' => $vote, 'id' => $_POST['id']]);
to("../front/result.php");
