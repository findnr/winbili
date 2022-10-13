$vedioPath='C:\Users\admin\Downloads'
cd $vedioPath
$files=ls | Sort-Object -Property CreationTime
$listPath='C:\Users\admin\Desktop\removehtml\newlist.txt'
$listName=Get-Content $listPath -Encoding UTF8
$timeList=@()
foreach ($file in $files)
{
   $extension = (Split-Path -Path $file -Leaf).Split(".")[1]
   $newName="{0}{1}.{2}" -f $files.IndexOf($file),$listName[$files.IndexOf($file)],$extension
   mv $file $newName
#  $timeList += (($file.CreationTime.Ticks - 621355968000000000)/10000000).ToString().Substring(0,10)
  #echo (($file.CreationTime.Ticks - 621355968000000000)/10000000).ToString().Substring(0,10)
  #echo $file.CreationTime
  #echo ===
  #echo $file.LastWriteTime
}
