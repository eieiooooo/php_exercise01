<?php

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

if($point % 2 === 0){
    echo 'xは偶数です';
}else{
    echo 'xは奇数です';
};
