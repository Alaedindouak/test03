<?php

require('page.html');

if (isset($_POST['sentences'])) {
    $sentences = explode(PHP_EOL, $_POST['sentences']);
    foreach ($sentences as $sentence) {
        echo '<li>' . "Source : $sentence ==> " . special_reverse($sentence) . '</li>';
    }
} else {
    echo '';
}

function special_reverse($strText){

    $str_arr = explode(' ', $strText);

    $num = 1;
    $order_reverse = 2;

    $i = 0;
    $new_str = '';
    foreach ($str_arr as $str) {
        $new_str = $new_str . ' ' . $str;
        $new_arr[$i] = $new_str;

        if ($order_reverse > $num) {
            $num++;
        } else {
            $i++;
            $num = 1;
            $new_str = '';
        }
    }

    krsort($new_arr);
    return implode(' ', $new_arr);
}

