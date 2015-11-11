<?php

namespace Jamosaur\Randstring\Tests;

class RandstringTest extends \PHPUnit_Framework_TestCase
{
    public function testLengthLimiter()
    {
        $rand = new \Jamosaur\Randstring\Randstring(null, 15);
        $this->assertLessThan(15, $rand->generate());
    }

    public function testNumberRange()
    {
        $rand       = new \Jamosaur\Randstring\Randstring(null, 100, 4, 12);
        $numbers    = preg_replace('/[^0-9]+/', '', $rand->generate());
        $this->assertLessThan(13, $numbers);
        $this->assertGreaterThan(3, $numbers);
    }

    public function testUcfirst()
    {
        $rand       = new \Jamosaur\Randstring\Randstring('ucfirst');
        $string     = $rand->generate();
        $this->assertEquals(ucfirst($rand->adjective).$rand->animal.$rand->number, $string);
    }

    public function testUCWords()
    {
        $rand = new \Jamosaur\Randstring\Randstring('ucwords');
        $string = $rand->generate();
        $this->assertEquals(ucfirst($rand->adjective).ucfirst($rand->animal).ucfirst($rand->number), $string);
    }
}