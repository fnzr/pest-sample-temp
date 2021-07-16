<?php

beforeAll(function(){
    echo 'Subdir: beforeAll'  . PHP_EOL;
});

test('first', function() {
    $this->assertTrue(true);
});

test('second', function() {
    $this->assertTrue(true);
});