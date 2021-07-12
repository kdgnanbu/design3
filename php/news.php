<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <title>news</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/slick.css" />
    <!--    <link rel="shortcut icon" href="../../_common/images/favicon.ico">-->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!--   メニュータブ-->
    <script>
        $(function() {
            const hum = $('#hamburger, .close')
            const nav = $('.sp-nav')
            hum.on('click', function() {
                nav.toggleClass('toggle');
            });
        });
    </script>

    <link rel="stylesheet" href="../css/animate.css">
    <script src="../js/jquery.textillate.js"></script>
    <script src="../js/jquery.lettering.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/script.js"></script>
</head>

<body>
    <header>
        <nav class="pc-nav">
            <ul>
                <li><a href="../php/top.php">top</a></li>
                <li><a href="../html/information.html">利用方法</a></li>
                <li><a href="../html/seasons.html">四季の楽しみ方</a></li>
                <li><a href="../html/access.html">アクセス</a></li>
                <li><a href="../html/contact.html">お問い合わせ</a></li>
            </ul>
        </nav>
        <nav class="sp-nav">
            <ul>
                <li><a href="../php/top.php">
                        <a1>top</a1>
                    </a></li>
                <li><a href="../html/information.html">
                        <a1>利用方法</a1>
                    </a></li>
                <li><a href="../html/seasons.html">
                        <a1>四季の楽しみ方</a1>
                    </a></li>
                <li><a href="../html/access.html">
                        <a1>アクセス</a1>
                    </a></li>
                <li><a href="../html/contact.html">
                        <a1>お問い合わせ</a1>
                    </a></li>
                <li class="close"><span>閉じる</span></li>
            </ul>
        </nav>
        <div id="hamburger">
            <span></span>
        </div>
    </header>




<?php
$server = "localhost";
$userName = "root";
$password = "root";
$dbName = "park";
$mysqli = new mysqli($server, $userName, $password,$dbName);

if ($mysqli->connect_error){
    echo $mysqli->connect_error;
    exit();
}else{
    $mysqli->set_charset("utf-8");
}
$data_no = $_POST["data"];
$sql = "select * from news WHERE no = $data_no";
$result = $mysqli -> query($sql);
//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}
//連想配列で取得
while($row1 = $result->fetch_array(MYSQLI_ASSOC)){
    $rows1[] = $row1;
}
//結果セットを解放
$result->free();

foreach($rows1 as $row1){
?>
    <div class="news_title">
        <?php echo $row1['details']; ?>
    </div>
    <?php
    }
    ?>
<div class="news_text">
    <?php echo $row1['text']; ?>
</div>
<div class="backtop"><a href="../php/top.php">topページに戻る</a></div>



    <footer>
        <div class="footer">
            <p>〒064-0959 札幌市中央区宮ヶ丘他<br>
                円山公園管理事務所<br>
                電話番号(011)621-0453<br>
                FAX(011)621-0515</p>
            <!--        <a href="../html/sitemap.html">サイトマップ</a>-->
        </div>
    </footer>
</body>
</html>
