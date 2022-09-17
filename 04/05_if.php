<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

$check = "";

for($i = 2; $i < $num; $i++ ){
    if($num % $i === 0){
        $check = false;
        break;
    }elseif($num % $i !== 0){
        $check = true;
    }
};

if($check){
    echo `{$num}は素数です`;
}else{
    echo `{$num}は素数ではありません`;
};
