<?php
/**
 * Created by PhpStorm.
 * User: nhchoi
 * Date: 16. 1. 26.
 * Time: 17:00
 */

function xxx() {
    $loop = mt_rand(0, 10);

    $ret = 0;
    for($i = 0; $i <= $loop; $i++) {
        $ret += (int)mt_rand(0, 10);
    }
    return $ret;
}


echo time() . " : " . xxx()

?>