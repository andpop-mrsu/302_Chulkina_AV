<?php

namespace nchulkina\Tests;
use \PHPUnit\Framework\TestCase;
use nchulkina\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Чулкина Анастасия Владимировна...', $truncater->truncate('Чулкина Анастасия Владимировна'));
        $this->assertSame('Чулкина Анас...', $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 10]));
        $this->assertSame('Чулкина Анастасия Владимировна...', $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 50]));
        $this->assertSame('Чулкина Анастасия Владимировна...', $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => -10]));
        $this->assertSame('Чулкина Анас*', $truncater->truncate('Чулкина Анастасия Владимировна', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Чулкина Анастасия Владимировна*', $truncater->truncate('Чулкина Анастасия Владимировна', ['separator' => '*']));
    }
}
