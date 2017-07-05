<?php

$kminicial = 100;
$kmfinal = 755;
$km = $kmfinal - $kminicial;
{
echo " O TOTAL PERCORRIDO FOI:  ". $km;
}
if ($km >= 0 and $km<= 40)
{
    echo " O VALOR DO FRETE É: R$ 140,00";
}
else if($km >=41 and $km <= 80)
{
    echo " O VALOR DO FRETE É: R$ 177,00";
}
else if($km >=81 and $km <= 120)
{
 echo " O VALOR DO FRETE É: R$ 222,00";
}
else if($km >=121 and $km <= 160)
{
 echo " O VALOR DO FRETE É: R$ 305,00";
}
else if($km >=161)
{
 $percorrido = $km * 2.16;	
 echo " O VALOR DO FRETE É: R$ ". $percorrido;
} 

?>