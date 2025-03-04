<?php
/*
 * @Author: 程英明
 * @Date: 2022-08-02 07:20:54
 * @LastEditTime: 2022-10-13 16:41:39
 * @LastEditors: 程英明
 * @Description: 
 * @FilePath: \winbili\index.php
 * QQ:504875043@qq.com
 */

/**
 * 获取bilibili的列表
 * 
 *
 * @var [type]
 */
$arrList = [];
$txt = '';
foreach ($arrList as $k => $v) {
    if ($k == 0) {
        $txt .= $v;
    } else {
        $txt .= PHP_EOL . $v;
    }
}
file_put_contents('newlist.txt', $txt);
