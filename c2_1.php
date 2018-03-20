

<!-- 输出<20的奇数（分别使用for、 while和do while来完成） -->
<?php
echo 'for循环输出小于20的奇数';
for($i = 0;$i < 20;$i++){
	if($i%2 == 1){
		echo $i.'</br>';
	}
}
echo 'while循环输出小于20的奇数';
$ii=0;
while($ii < 20){
	if($ii % 2 ==1){
		echo $ii.'</br>';
	}$ii++;
}

echo 'do...while输出小于20的奇数';
$iii=0;
do{
	if($iii % 2 ==1)
	{
		echo $iii.'</br>';
	}
	$iii++;
}
while($iii < 20)


?>
