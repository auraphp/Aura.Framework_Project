<?php
namespace Aura\Framework_Project;

class CliProjectTest extends \PHPUnit_Framework_TestCase
{
    public function testCli()
    {
        $console = dirname(dirname(__DIR__)) . '/cli/console.php';
        $actual = shell_exec("php {$console} hello");
        $expect = 'Hello World!' . PHP_EOL;
        $this->assertSame($expect, $actual);
    }
}
