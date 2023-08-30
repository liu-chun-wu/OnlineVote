<?
include_once "../setting.php";
$candidate = new DB('candidate');
$data = $candidate->all();
?>
<!DOCTYPE html>
<html>

<head>
    <title>投票結果</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="../js/custom.js"></script>
</head>

<body>
    <div align='center'>
        <p><img src='../image/title_3.jpg'></p>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script>
            printChart();
        </script>
        <table style="width: 600px">
            <tr align='center'>
                <?
                //print_r($data);
                foreach ($data as $ket => $value) {
                    echo "<td>" . $value['score'] . "</td>";
                }
                ?>
            </tr>
        </table>
        <p><a href='../index.php'>回首頁</a></p>
    </div>

</body>

</html>