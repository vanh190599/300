<?php

/**
 * Example 1:
 *
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 * Example 2:
 *
 * Input: nums = [3,2,4], target = 6
 * Output: [1,2]
 * Example 3:
 *
 * Input: nums = [3,3], target = 6
 * Output: [0,1]
 */

function twoSum($array, $target)
{
    foreach ($array as $key1 => $value1) {
        foreach ($array as $key2 => $value2) {
            if ($key1 == $key2) continue;
            if ($value1 + $value2 == $target) {
                return [$key1, $key2];
            }
        }
    }
}

//twoSum([2, 7, 11, 15], 9); // 0 - 1
//twoSum([3, 2, 4], 6); // 1 - 2
//twoSum([3, 3], 6); // 0 - 1

function twoSum2($array, $target)
{
    for ($i = 0; $i <= count($array) - 1; $i++) {
        for ($j = $i + 1; $j <= count($array); $j++) {
            if ($array[$i] + $array[$j] == $target) {
                echo "$i - $j" . PHP_EOL;
                return [$i, $j];
            }
        }
    }
}

twoSum2([2, 7, 11, 15], 9); // 0 - 1
twoSum2([3, 2, 4], 6); // 1 - 2
twoSum2([3, 3], 6); // 0 - 1