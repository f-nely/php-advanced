<?php

$arrIt = new ArrayIterator([13, 23, 12, 42]);

/*function calc(ArrayIterator $it) {
    echo $it->current() * 0.9;
    echo '<br>';
    return true;
}

iterator_apply($arrIt, 'calc', [$arrIt]);*/

iterator_apply($arrIt, function ($it) {
    echo $it->key() . ' = ' . $it->current();
    echo '<br>';
    return true;
}, [$arrIt]);