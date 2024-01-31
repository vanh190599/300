<?php
/**
 * Đề bài: Kiểm tra số nào được lặp lại nhiều nhất trong mảng
 */
function getTheMostPopularNumber($numbers)
{
    $tmp = [];

    foreach ($numbers as $key => $value) {
        if (isset($tmp[$value])) {
            $tmp[$value]++;
            continue;
        }

        $tmp[$value] = 1;
    }

    $max = $tmp[0];
    $result = array_keys($tmp)[0];

    foreach ($tmp as $key => $value) {
        if ($value > $max) {
            $max = $value;
            $result = $key;
        }
    }

    echo $result;
}

getTheMostPopularNumber([1, 2, 2, 2, 2, 2, 2, 2, 3, 3, 5, 4, 4, 4, 5, 5, 5, 5]);

