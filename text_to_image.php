<?php
    $width = "150";
    $height = "30";
    $text = "welcome to my site";
    $pic = ImageCreate($width,$height);
    $col1 = ImageColorAllocate($pic,0,0,0);
    $col2 = ImageColorAllocate($pic,255,255,255);

    ImageFilledRectangle($pic,0,0,500,30, $col2);
    ImageString($pic, 3, 5, 8, $text, $col1);
    Header("Expires: ".date("r",time())."");
    Header("Content-type: image/jpeg");
    ImageJPEG($pic);
    ImageDestroy($pic);
 ?>