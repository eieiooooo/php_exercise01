<?php

$poket_money = 1000;
$fund_raising = 101;

do{
    $remain_money = $poket_money - $fund_raising;
    echo `あなたの所持金は{$poket_money}円です。`. PHP_EOL . ` {$fund_raising}円募金しました。` . PHP_EOL . `残り残高は{$remain_money}です。`;
    $poket_money -= $fund_raising;
}while($poket_money > $fund_raising);

echo 'あなたはこれ以上募金できません。';
