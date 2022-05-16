<?php

namespace Nchulkina\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна') . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Чулкина Анастасия Владимировна', ['separator' => '*']) . PHP_EOL;
}
