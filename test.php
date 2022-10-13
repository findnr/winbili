<?php
/*
 * @Author: 程英明
 * @Date: 2022-08-28 09:35:10
 * @LastEditTime: 2022-08-28 16:40:53
 * @LastEditors: 程英明
 * @Description: 
 * @FilePath: \removehtml\test.php
 * QQ:504875043@qq.com
 */

// $ob = 0b1100100000000;

// $oba = 0b11100101;

// $s = $ob ^ $oba;
// printf("%b", $s);
$str = '680868322729106500C0012D16';
$num = (int) (strlen($str) / 8);
for ($i = 0; $i <= $num; $i++) {
    $new_str = substr($str, $i * 8, 8);
    $hex = base_convert($new_str, 16, 2);
    print($hex);
    echo PHP_EOL;
}
// print($hex);
// $hex  =  base_convert('68086832', 16, 2);
// print($hex);
// echo strlen($hex);
