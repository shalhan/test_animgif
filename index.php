<html>
<head>
</head>
<body>
<?php
include('AnimGif.php');
$frames = array(
    file_get_contents("images/test1.jpg"),
    file_get_contents("images/test2.jpg"),
    file_get_contents("images/test3.jpg")
);
$durations = array(100, 100);

$anim = new GifCreator\AnimGif();
$anim->create($frames, $durations);
$gif = $anim->get();
$anim->save("animated.gif");


?>
<h1>Tesdfsdft</h1>
</body>
</html>