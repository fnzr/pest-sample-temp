<?php

uses()->beforeAll(function() {
    echo 'Global: beforeAll' . PHP_EOL;
})->in('subdir');