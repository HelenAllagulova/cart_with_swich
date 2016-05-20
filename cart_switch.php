<meta charset="utf-8">
<style>
        body {
        font-family: "Courier New";
    }
</style>
<body>
<?php

    $flag=1;
    $rowNumber0 = '#';
    $rowNumber1 = $flag;
    $rowNumber2 = ++$flag;
    $rowNumber3 = ++$flag;
    $rowNumber4 = ++$flag;
    $rowNumber5 = ++$flag;
    $rowNumber6 = ++$flag;
    $rowNumber7 = ++$flag;

    $tovar0 = 'Item';
    $tovar1 = 'IPhone';
    $tovar2 = 'fmModule';
    $tovar3 = 'packet';
    $tovar4 = 'NokiaLumia';
    $tovar5 = 'Navigator';
    $tovar6 = '1C';
    $tovar7 = 'Samsung';

    $costTovar0 = 'Price';
    $costTovar1 = 25500;
    $costTovar2 = 1500;
    $costTovar3 = 13;
    $costTovar4 = 11000;
    $costTovar5 = 1500;
    $costTovar6 = 150;
    $costTovar7 = 17000;

    $countTovar0='Quantity';
    $countTovar1=1;
    $countTovar2=10;
    $countTovar3=18;
    $countTovar4=2;
    $countTovar5=4;
    $countTovar6=2;
    $countTovar7=1;

    $sum0='Summa';
    
    $dostupnost0 = 'In Stock';
    $dostupnost1 = false;
    $dostupnost2 = true;
    $dostupnost3 = true;
    $dostupnost4 = false;
    $dostupnost5 = false;
    $dostupnost6 = true;
    $dostupnost7 = true;

    $summa = 0;
    $summa = $costTovar1*$countTovar1 + $costTovar2*$countTovar2 +
             $costTovar3*$countTovar3 + $costTovar4*$countTovar4 +
             $costTovar5*$countTovar5 + $costTovar6*$countTovar6 +
             $costTovar7*$countTovar7;
    $col1 = $col2 = $col3 = $col4 = $col5 = $col6 = 1;
    for($i=0;$i<=7;$i++)
        {
            $Dobavit=17;
            $forNumber='rowNumber'.$i;
            $forTovar='tovar'.$i;
            $forCount='countTovar'.$i;
            $forCost='costTovar'.$i;
            $forSumm='sum'.$i;
            if ($i>0){
                $$forSumm=$$forCount*$$forCost;
            }
            $forDost='dostupnost'.$i;
            if ($i>0){
              if($$forDost===true)
                    $$forDost='in_stock';
                else
                    $$forDost='wait_for_a_week';}
            if (strlen($$forNumber)>$col1){
                $col1 = strlen($$forNumber);
                }
            if (strlen($$forTovar)>$col2)
                $col2 = strlen($$forTovar);
            if (strlen($$forCount)>$col3)
                $col3 = strlen($$forCount);
            if (strlen($$forCost)>$col4)
                $col4 = strlen($$forCost);
            if (strlen($$forSumm)>$col5)
                $col5 = strlen($$forSumm);
            if (strlen($$forDost)>$col6)
                $col6 = strlen($$forDost);
            $length = (int)$col1 + (int)$col2 + (int)$col3 + (int)$col4 + (int)$col5 + (int)$col6 + $Dobavit;

        }
    $firstLine='';
    $firstLine = str_pad($firstLine, $length, "_", STR_PAD_RIGHT);
    $colLine = '|';

if (php_sapi_name()=='cli')
            {
        $Perenos=PHP_EOL;
        $Probel=' ';
            }
    else {
        $Perenos='<br>';
        $Probel='&nbsp;';
        }
echo $Perenos.$Perenos;
echo $Probel.$firstLine.$Perenos;
for ($i=0;$i<=8;$i++)
{
    if($i!=8){
    $stroka = '';
    $forNumber='rowNumber'.$i;
    $forTovar='tovar'.$i;
    $forCount='countTovar'.$i;
    $forCost='costTovar'.$i;
    $forSumm='sum'.$i;
    $forDost='dostupnost'.$i;}
    switch($i) {
        case 0:{
            $$forNumber = '_' . str_pad($$forNumber, $col1, "_", STR_PAD_BOTH) . '_';
            $$forTovar = '_' . str_pad($$forTovar, $col2, "_", STR_PAD_BOTH) . '_';
            $$forCount = '_' . str_pad($$forCount, $col3, "_", STR_PAD_BOTH) . '_';
            $$forCost = '_' . str_pad($$forCost, $col4, "_", STR_PAD_BOTH) . '_';
            $$forSumm = '_' . str_pad($$forSumm, $col5, "_", STR_PAD_BOTH) . '_';
            $$forDost = '_' . str_pad($$forDost, $col6, "_", STR_PAD_BOTH) . '_';
            $stroka = $colLine.$$forNumber.
                $colLine.$$forTovar.
                $colLine.$$forCount.
                $colLine.$$forCost.
                $colLine.$$forSumm.
                $colLine.$$forDost.$colLine.$Perenos
            ;
            echo $stroka;
            break;
        }

        case 8: {
            $stroka = $colLine . str_pad('Total amount', $length - $col6 - 3, "_", STR_PAD_BOTH) .
                $colLine . str_pad($summa, $col6 + 2, "_", STR_PAD_BOTH) . $colLine;
            echo $stroka.$Perenos.$Perenos;
            break;
        }

        default: {
            $$forSumm=$$forCount*$$forCost;
            $$forNumber = '_' . str_pad($$forNumber, $col1, "_", STR_PAD_BOTH) . '_';
            $$forTovar = '_' . str_pad($$forTovar, $col2, "_", STR_PAD_BOTH) . '_';
            $$forCount = '_' . str_pad($$forCount, $col3, "_", STR_PAD_BOTH) . '_';
            $$forCost = '_' . str_pad($$forCost, $col4, "_", STR_PAD_BOTH) . '_';
            $$forSumm = '_' . str_pad($$forSumm, $col5, "_", STR_PAD_BOTH) . '_';
            $$forDost = '_' . str_pad($$forDost, $col6, "_", STR_PAD_BOTH) . '_';
            $stroka = $colLine.$$forNumber.
                $colLine.$$forTovar.
                $colLine.$$forCount.
                $colLine.$$forCost.
                $colLine.$$forSumm.
                $colLine.$$forDost.$colLine.$Perenos
            ;
            echo $stroka;
            break;
        }

    }
  }






?>
</body>