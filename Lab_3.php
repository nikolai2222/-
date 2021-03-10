	<form action="Lab_3.php" method="get">
	<input type="text" name="a1" placeholder="Введите первое число"><br>
	<input type="text" name="a2" placeholder="Введите второе число"><br>
    Проверка на отрицательность или положительность<br>
	<input type="text" name="a3" placeholder="Ввидте число"><br>
	<input type="submit" name="Отправить"><br>
	</form>
<?php
$link = mysqli_connect('localhost', 'root', 'root', 'users');
if (!$link) {
	die("Ошибка " . mysqli_error($link));
}
echo "1)Подключение успешно<br>";

echo "2)Четные числа от 3 до 300:<br>";
for ($i=3; $i <= 300; $i++) {
	if ($i % 2 == 0) echo "$i ";
}

$a=$_REQUEST['a1'];
$b=$_REQUEST['a2'];
$c=$a+$b;
echo "<br>3)Сумма первого и второго числа = $c<br>";

echo "4)Провека положительное или отрицательное число:<br>";
$d=$_REQUEST['a3'];
if($d < 0) echo "$d - Число отрицательное<br>";
if($d > 0) echo("$d - Число положительное");

echo "5)Массив заглавных латинских букв 5 на 4:<br>";
$ar = array(['A','B','C','D'],['E','F','G','H'],['I','J','K','L'],['M','N','O','P'],['Q','R','S','T']);
foreach ($ar as list($a,$b,$c,$d,$e)) {
	echo "$a $b $c $d $e<br>";
}
?>