<?php
$n=6;
$fact=720;
//Перестановка
$perm="123456";
//Переменная для последовательности меньше на  1 разряд
$seq="12345";
//Счетчик
$couter=0;
    for ($i=1; $i != $fact+1; $i++) {
            print $perm . "\n";
            $seq.=$perm[$n-1];
            $mm = $i;
            $m=$n;
            while ($m > 0) {
            //Проверка  на делимость
            if ($mm%$m==0)  {
                //Увеличим счетчик
                $couter++;
                $mm /= $m--;
                print ("-----\n");
            }
            else
            {
                //Счетчик равен 0, допишем хвостовую часть и
                //Обнулим счетчик
            if ($couter != 0) {
            $tail_seq=strrev(substr($perm, 0, $n-$m+1));
            $seq.=$tail_seq;
            $couter=0;
            }
            //Разберем перестановку на две части, обернем первую,
            //соберем обратно, вернемся во внешний цикл
            $tail= strrev(substr($perm, 0, $n-$m+1));
            $head = substr($perm,  $n-$m+1);
            $perm=$head.$tail;
            continue 2;
                }
            }
}
//Вывод. Уберем повторы
$sum=0;
for ($k=0; $k!= strlen($seq)-1; $k++) {
if ($seq[$k]!=$seq[$k+1]) {
    $sum++;
print  ($seq[$k]);
    }
}
print "\n Сумма:" . ($sum);
?>
