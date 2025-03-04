#### 更新getname.js（2025-03-04）
- 更新标题获取的类名$(".title-txt")

# winbili
使用油猴脚本下载bilibili视频重新命名
### 环境要求
php任意版本
win10系统
浏览器使用chrome edge firefox

### 使用用方法
- 第一步：在bilibili视频页面打开console控制台，把getname.js里面的javascript代码复制，然后再粘贴到console控制台中按回车执行,然后得到一个数组，复制数据
- 第二步：把第一步复制的数据粘贴到index.php文件中$arrList变量值
- 第三步：在控制台中进入到当前文件路径，执行php index.php（这一步会把$arrList的值写到一个newlist.txt文件中）
- 第四步：修改文件biliRenameFileNmae.ps1中$vedioPath为视频所在的路径，修改$listPath为newlist.txt路径
- 第五步：用powershell执行biliRenameFileNmae.ps1