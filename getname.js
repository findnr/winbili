/*
 * @Author: 程英明
 * @Date: 2022-10-13 16:40:21
 * @LastEditTime: 2022-10-13 16:40:34
 * @LastEditors: 程英明
 * @Description: 
 * @FilePath: \winbili\getname.js
 * QQ:504875043@qq.com
 */
let arrList = []; let obj = $(".title-txt"); let len = obj.length; for (let index = 0; index < len; index++) { arrList[index] = obj[index].innerHTML.split(" ").join("") }; console.log(arrList);