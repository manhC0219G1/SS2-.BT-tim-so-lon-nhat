<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$arr = array(array(1, 2, 3, 4), array(5, 6, 7, 8), array(23, 22, 21));
$max = $arr[0][0];
for ($index = 0; $index < count($arr); $index++) {
    for ($jndex = 0; $jndex < count($arr[$index]); $jndex++) {
        if ($max < $arr[$index][$jndex]) {
            $max = $arr[$index][$jndex];
        }
    }
}
echo "So lon nhat trong mang la :".$max;
?>
</body>
</html>