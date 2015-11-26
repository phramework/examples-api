<?php
use \Phramework\Testphase\Testphase;
use \Phramework\Testphase\TestParser;

$settings = include __DIR__ . '/../settings.php';

Testphase::setBase($settings['base']);

TestParser::addGlobal(
    'randInteger10',
    rand(1, 10)
);

TestParser::addGlobal(
    'headerRequestContentType',
    'Content-Type: application/json'
);
TestParser::addGlobal(
    'headerRequestAccept',
    'Accept: application/json'
);
TestParser::addGlobal(
    'headerResponseContentType',
    'application/json;charset=utf-8'
);
