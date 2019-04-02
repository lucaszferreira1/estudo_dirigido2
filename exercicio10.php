<?php
print "Qual o valor de A:";
$a=(float)fgets(STDIN);
if ($a==0){
    exit;
}
print "Qual o valor de B:";
$b=(float)fgets(STDIN);
print "Qual o valor de C:";
$c=(float)fgets(STDIN);
$delta=(pow($b,2)-(4*$a*$c));
    if ($delta>0){
        print "Há duas raízes reais\n";
    }
    elseif ($delta<0){
        print "Não há raízes reais\n";
        exit;
    }
    elseif ($delta==0){
        print "Só há uma raíz real\n";

    }
    $x1=((-($b)+sqrt($delta))/(2*$a));
    $x2=((-($b)-sqrt($delta))/(2*$a));
print "X1 = $x1\n";
print "X2 = $x2\n";

