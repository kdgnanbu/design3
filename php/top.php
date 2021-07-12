<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <meta name="robots" content="noindex,nofollow">
   <title>top</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="../css/slick.css"/>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<!--   メニュータブ-->
   <script>
   $(function() {
      const hum = $('#hamburger, .close')
      const nav = $('.sp-nav')
      hum.on('click', function(){
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
            <li><a href="../php/top.php"><a1>top</a1></a></li>
            <li><a href="../html/information.html"><a1>利用方法</a1></a></li>
            <li><a href="../html/seasons.html"><a1>四季の楽しみ方</a1></a></li>
            <li><a href="../html/access.html"><a1>アクセス</a1></a></li>
            <li><a href="../html/contact.html"><a1>お問い合わせ</a1></a></li>
            <li class="close"><span>閉じる</span></li>
         </ul>
      </nav>
      <div id="hamburger">
         <span></span>
      </div>
   </header>
   <div class="top">
           <div class="main-visual" data-in-effect="rollIn"><div class="title">円山公園</div>
     </div>
      <script>
        $(function () {
       $('.main-visual').textillate();
        })
    </script>
    <span class="sub-visual" data-in-effect="rollIn">
     <div class="text">ー　桜の名所　ー</div>
    </span>

    <script>
        $(function () {
        $('.sub-visual').textillate();
        })
    </script>
   </div>


<div class="posision">
<p class="title">お知らせ、イベント情報</p>
</div>



<div class="tab-area">
  <div class="tab active">
    すべて
  </div>
  <div class="tab">
    お知らせ
  </div>
  <div class="tab">
    イベント
  </div>
   </div>
  <div class="content-area" style="padding-top:10px;">
  <div class="content show">









<div class="php_text" style=" height:230px;">
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
$sql = "SELECT * FROM news order by time desc";
$result = $mysqli -> query($sql);
//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}
//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
}
//結果セットを解放
$result->free();
// データベース切断
//$mysqli->close();
?>
<table width="100%">
<?php
foreach($rows as $row){
?>
<tr style="padding-bottom:10px;">

    <td style="padding-bottom:10px;"><?php
                        $date = $row['time'];
                        echo date('y/m/d', strtotime($date)); ?></td>

    <td style="padding-bottom:10px;padding-left:25px;"><?php echo $row['details']; ?></td>
    <td align="right" style="padding-bottom:10px;">


    <form action="../php/news.php" method="post">
<input type="hidden" name="data" value="<?php echo $row['no']; ?>">

  <input type="submit"value="続きを読む"


 style="cursor: pointer;
  border: none;
  border:0;
  background: none;
  border-color:white;"


  />
</form>


</tr>
<?php
}
?>
</table>
</div>
</div>









<div class="content">
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
$sql = "select * from news WHERE news_cd = 0 order by time desc";
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
// データベース切断
//$mysqli->close();
?>
<table width="100%">
<?php
foreach($rows1 as $row1){
?>
<tr style="padding-bottom:10px;">
    <td style="padding-bottom:10px;"><?php
                        $date = $row1['time'];
                        echo date('y/m/d', strtotime($date)); ?></td>
    <td style="padding-bottom:10px;padding-left:25px;"><?php echo $row1['details']; ?></td>
    <td align="right" style="padding-bottom:10px;">




      <form action="../php/news.php" method="post">
<input type="hidden" name="data" value="<?php echo $row1['no']; ?>">
 <input type="submit"value="続きを読む"


 style="cursor: pointer;
  border: none;
  background: none;
  border-color:white;"


  />
</form>



    </td>
</tr>
<?php
}
?>
</table>
</div>











  <div class="content">
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
$sql = "select * from news WHERE news_cd = 1 order by time desc";
$result = $mysqli -> query($sql);
//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}
//連想配列で取得
while($row2 = $result->fetch_array(MYSQLI_ASSOC)){
    $rows2[] = $row2;
}
//結果セットを解放
$result->free();
// データベース切断
//$mysqli->close();
?>
<table width="100%">
<?php
foreach($rows2 as $row2){
?>
<tr style="padding-bottom:10px;">
    <td style="padding-bottom:10px;"><?php
                        $date = $row2['time'];
                        echo date('y/m/d', strtotime($date)); ?></td>
    <td style="padding-bottom:10px;padding-left:25px;"><?php echo $row2['details']; ?></td>
    <td align="right" style="padding-bottom:10px;">




      <form action="../php/news.php" method="post">
<input type="hidden" name="data" value="<?php echo $row2['no']; ?>">
 <input type="submit"value="続きを読む"


 style="cursor: pointer;
  border: none;
  background: none;
  border-color:white;"


  />
</form>



    </td>
</tr>
<?php
}
?>
</table>
</div>











  </div>
    <script>
    $(function() {
  let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
  $(".tab").on("click", function() { // tabをクリックしたらイベント発火
    $(".active").removeClass("active"); // activeクラスを消す
    $(this).addClass("active"); // クリックした箇所にactiveクラスを追加
    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
    $(".content").removeClass("show").eq(index).addClass("show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
  })
})
    </script>
<div class="season">
    <div class="title_posi1">
<p class="title">四季それぞれの楽しみ方</p>
</div>

<div id="slide-div2" class="slide">
<div class="up"><img src="../img/slider1.jpg"></div>
<div class="down"><img src="../img/slider2.jpg"></div>
<div class="up"><img src="../img/slider3.jpg"></div>
<div class="down"><img src="../img/slider4.jpg"></div>
<div class="up"><img src="../img/slider5.jpg"></div>
<div class="down"><img src="../img/slider6.jpg"></div>
<div class="up"><img src="../img/slider1.jpg"></div>
<div class="down"><img src="../img/slider2.jpg"></div>
<div class="up"><img src="../img/slider3.jpg"></div>
<div class="down"><img src="../img/slider4.jpg"></div>
<div class="up"><img src="../img/slider5.jpg"></div>
<div class="down"><img src="../img/slider6.jpg"></div>
</div>
<p><script>
(function($) {
    $('#slide-div1').slick({
        arrows: false,
        autoplay: true,
        slidesToShow: 7,
        slidesToScroll: 1,
    });
    $('#slide-div2').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: 'linear',
        slidesToShow: 7,
        slidesToScroll: 1,
    });
})(jQuery);
</script></p>

<div class="box">
    <p>　円山原始林の北側に位置する円山公園は古くからの桜の名所であり、園内にはエゾヤマザクラ、ソメイヨシノなど約160本の桜が植えられています。桜の開花時期には、期間限定でお花見用バーベキューコンロのレンタルも行っています。また、季節ごとに様々なイベントが行われており、小さい子から大人まで幅広い年代に親しまれています。</p>
</div>
<div class="btn_posi"><a href="../html/seasons.html" class="btn">詳しく見る</a></div>
</div>

<div class="title_posi2">
<p class="title">今日の円山公園の天気</p>
    </div>
<div class="container">
<div class="row">
    <div class="col-sm-4">
<section>
<div class="city">札幌市</div>
    <div  id="now">
        <div id="weather">
        </div>
    </div>




</section>
</div><!-- /.container -->

    <div class="col-sm-8">
<section>
<!--  <div class="right">-->
<div class="table" ></div>
          <table id="forecast" style="text-align:center;">
           <p style="text-align:center;font-size:18px;">円山公園のこれからの気温</p>
            </table>

<!--
           <tr>
               <th>時間</th><td>0-2</td><td>3-5</td><td>6-8</td><td>9-11</td><td>12-14</td><td>15-17</td><td>18-20</td><td>21-23</td>
           </tr>
           <tr>
               <th>気温</th>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
           </tr>
-->



<!--</div>-->




</section>

    </div>
</div>

</div>












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
