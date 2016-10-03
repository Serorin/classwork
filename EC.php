<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>top</title>
    <link rel="stylesheet" href="EC.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <div class="center">
        <h1>仮名サイト</h1>
    </div>



    <!-- 折り畳み展開ポインタ -->
    <div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
      <p class="category"><a style="cursor:pointer;">▼ジャンル</a>
      </p>
    </div>
    <div id="open" style="display:none;clear:both;">
    <p><a href="drink.php">ドリンク</a></p>
    <p><a href="sweets.php">スイーツ</a></p>
    </div>

    <br>
    <div class = "Product">
    <p>人気商品</p>

    <div class="public">
        <a href="menu.php"><img src="仮.png"></a>
        <p>抹茶白玉フローズン</p>
        <p>￥648</p>
    </div>
    <div class="public">
        <a href=".html"><img src="仮.png"></a>
        <p>わらび餅フローズン</p>
        <p>￥691</p>
    </div>
    <div class="public">
        <a href=".html"><img src="仮.png"></a>
        <p>抹茶白玉パフェ</p>
        <p>￥853</p>
    </div>

    <p>おすすめ商品</p>
    <div class="public">
        <img src="仮.png">
        <p>ほうじ茶生チョコレートパフェ</p>
        <p>￥950</p>
    </div>

    <div class="public">
        <img src="仮.png">
        <p>抹茶白玉フロートラテ</p>
        <p>ICE</p>
        <p>レギュラー ￥616</p>
        <p>ラージ ￥702</p>
    </div>

    <div class="public">
        <img src="仮.png">
        <p>抹茶白玉あずきラテ</p>
        <p>HOT/ICE</p>
        <p>レギュラー ￥616</p>
        <p>ラージ ￥702</p>
    </div>
  </div>

    <table class="info1">
        <tr class="info2">
            <td>お知らせ</td>
        </tr>
        <tr>
            <td>サイトオープン</td>
            <td>2016.09.28</td>
        </tr>
        <tr>
            <td>メニュー公開</td>
            <td>coming soon</td>
        </tr>
    </table>

</body>

</html>
