<?php
    // 生成随机的字符串·
/**
 * @param int $len
 * @return bool|string
 */
    function get_str($len = 4){
        $chars = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $str = str_shuffle($chars);//将字符串打乱
        $str = substr($str,0,$len);//截取

        return $str;
    }

    function img_code(){

    // 1.定义验证码宽高
    $width = 63;
    $height = 29;


    //2.创建一个自定义宽高的验证码图片， imagecreatetruecolor()

    $img = imagecreatetruecolor($width,$height);


    //3.给验证码添加背景颜色
    $bgcolor = imagecolorallocate($img,0,255,255);
    $textcolor = imagecolorallocate($img,0,255,0);

    //4.在指定图片上面画一个矩形 imagerectangle();
    imagerectangle($img,0,0,$width,$height,$bgcolor);

    //5.将文字放入图片中

    $code = get_str();
    imagestring($img,5,15,7,$code,$textcolor);


    //6.图片上加一些点 imagesetpixed()

    for($i = 0;$i < 40;$i++){
        $dotcolor = imagecolorallocate($img,mt_rand(0,155),mt_rand(0,155),mt_rand(0,155));
        imagesetpixel($img,mt_rand(0,155),mt_rand(0,155),$dotcolor);
    }

    // 画线
    for ($i=0; $i < 4; $i++) { 
        $linercolor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        imageline($img,mt_rand(1,$width-1),mt_rand(1,$height-1),mt_rand(1,$width-1),mt_rand(1,$height-1),$linercolor);
    }

    // 将验证码存入session
    session_start();
    $_SESSION['code'] = $code;


    //设置内容类型标头 - 这个例子是image/jpeg

    header('Content-type:image/jpeg');

    // 输出图像
    imagejpeg($img);

    // 释放内存
    imagedestroy();

}
img_code();