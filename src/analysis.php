<?php
xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);

function a($a) {
    echo $a * 2.5;
    return;
}

function b($count) {
    if ($count > 25) {
        echo "too much\n";
    }
    for ($i = 0; $i < $count; $i++) {
        a($i + 0.17);
    }
}

b(6);
b(10);

var_dump(xdebug_code_coverage_started());
var_dump(xdebug_get_code_coverage());
?>