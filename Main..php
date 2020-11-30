//例としてPexels(https://www.pexels.com/ja-jp/)の犬の画像のURLを使用

<?php
$url = 'https://images.pexels.com/photos/1287830/pexels-photo-1287830.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260';


$data = file_get_contents($url);

// 以下は同様にブラウザに出力
header('Content-type: image/jpg');
echo $data;
?>