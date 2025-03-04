$path = 'C:\Users\administrator\Downloads'
$listPath = 'C:\Users\administrator\Desktop\winbili\newlist.txt'
$listName = Get-Content $listPath -Encoding UTF8
$counter = 1
Get-ChildItem $path | Sort-Object -Property CreationTime | ForEach-Object {
  $file = $_
  $extension = $file.Extension #获取文件扩展名
  $newFileName = "{0}_{1}{2}" -f $counter, $listName[$counter - 1], $extension #构建新文件名
  $counter++ #计数器加1
  Rename-Item $file.FullName -NewName $newFileName #重命名文件
}
