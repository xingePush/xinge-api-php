<?php 

require_once ("../XingeApp.php");

class StyleUnitTest extends PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $s = new Style(123);
        $this->assertEquals(123, $s->getBuilderId());
        $this->assertEquals(1, $s->getClearable());
        $this->assertEquals(0, $s->getRing());
        $this->assertEquals(0, $s->getVibrate());
        $s = new Style(1,2,3,4);
        $this->assertEquals(1, $s->getBuilderId());
        $this->assertEquals(2, $s->getRing());
        $this->assertEquals(3, $s->getVibrate());
        $this->assertEquals(4, $s->getClearable());
    }
    
    public function testIsValid()
    {
    	$s = new Style(3);
    	$this->assertTrue($s->isValid());
    	$s = new Style("a");
    	$this->assertFalse($s->isValid());
    	$s = new Style(3,1,1,1);
    	$this->assertTrue($s->isValid());
    	$s = new Style(3,2,1,1);
    	$this->assertFalse($s->isValid());
    }
}

