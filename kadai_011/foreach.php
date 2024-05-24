<!DOCYYPE html>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
    <p>
        <?php

        $hokkaido =["名前"=>"onion","値段"=>200,"産地"=>"北海道"];

        foreach($hokkaido as $key=>$value){
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
    </body>

</html>