<?
include_once "setting.php";
$candidate = new DB('candidate');
?>
<!DOCTYPE html>
<html>

<head>
    <title>線上投票</title>
    <meta charset="utf-8">
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
</head>

<body bgcolor="#FFE6CC">
    <p align="center"><img src="image/title_1.jpg"></p>
    <table width="75%" align="center" border="2" bordercolor="#999999">
        <tr bgcolor="#0033CC">
            <td align="center">
                <font color="#FFFFFF">選擇投票</font>
            </td>
            <td align="center">
                <font color="#FFFFFF">候選人</font>
            </td>
            <td align="center">
                <font color="#FFFFFF">候選人介紹</font>
            </td>
            <td align="center">
                <font color="#FFFFFF">刪除候選人</font>
            </td>
        </tr>
        <?
        foreach ($candidate->all() as $key => $value) {
        ?>
            <tr>
                <form action="api/vote.php" method="post">
                    <input type="hidden" name="id" value=<?= $value['id']; ?>>
                    <td align="center"><input type="submit" value="投票"></td>
                </form>
                <td align="center"><?= $value['name']; ?></td>
                <td><?= $value['introduction']; ?></td>
                <form action="api/delete.php" method="post">
                    <input type="hidden" name="id" value=<?= $value['id']; ?>>
                    <td align="center"><input type="submit" value="刪除"></td>
                </form>
            </tr>
        <?
        }
        ?>
    </table>
    <p align="center">
        <button type="button" onclick="goto('front/recommend.php')">推薦候選人</button>
        <button type="button" onclick="goto('front/result.php')">觀看投票結果</button>
    </p>
</body>

</html>