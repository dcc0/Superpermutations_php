
<?php
$n = 4;
$fact = 24;

// Перестановка

$perm = "1234";

// Переменная для последовательности меньше на  1 разряд

$seq = "123";

// Счетчик

$couter = 0;

for ($i = 1; $i != $fact + 1; $i++)
	{
	print $perm . "\n";
	$seq.= $perm[$n - 1];
	$mm = $i;
	$m = $n;
	while ($m > 0)
		{

		// Проверка  на делимость

		if ($mm % $m == 0)
			{

			// Увеличим счетчик

			$couter++;
			$mm/= $m--;
			print ("-----\n");
			}
		  else
			{

			// Счетчик равен 0, допишем хвостовую часть и
			// Обнулим счетчик

			if ($couter != 0)
				{
				$seq.= strrev(substr($perm, 0, $n - $m + 1));
				$couter = 0;
				}

			// Разберем перестановку на две части, обернем первую,
			// соберем обратно, вернемся во внешний цикл

			$perm = substr($perm, $n - $m + 1) . strrev(substr($perm, 0, $n - $m + 1));
			continue2;
			}
		}

	// Циклический сдвиг перестановки

	$sw = $perm[0];
	for ($j = 0; $j < $n - 1; $j++) $perm[$j] = $perm[$j + 1];
	$perm[$n - 1] = $sw;
	}

// Вывод. Уберем повторы

$sum = 0;

for ($k = 0; $k != strlen($seq) - 1; $k++)
	{
	if ($seq[$k] != $seq[$k + 1])
		{
		$sum++;
		print ($seq[$k]);
		}
	}

print "\n Сумма:" . ($sum);
?>

