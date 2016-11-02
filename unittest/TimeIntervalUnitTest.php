<?php 

require_once ("../XingeApp.php");

class TimeIntervalUnitTest extends PHPUnit_Framework_TestCase
{
    public function testIsValid()
    {
        $ti = new TimeInterval(0, 0, 0, 0);
        $this->assertTrue($ti->isValid());
        $ti = new TimeInterval(23, 59, 23, 59);
        $this->assertTrue($ti->isValid());
        $ti = new TimeInterval(-1, 59, 23, 59);
        $this->assertFalse($ti->isValid());
        $ti = new TimeInterval(23, 59, 23, 60);
        $this->assertFalse($ti->isValid());
        $ti = new TimeInterval(23, 59, 23, "abc");
        $this->assertFalse($ti->isValid());
    }
    
    public function testToArray()
    {
    	$ti = new TimeInterval(8, 1, 9, 0);
    	$this->assertTrue($ti->isValid());
    	$arr = $ti->toArray();
    	$this->assertTrue(is_array($arr));
    	$this->assertTrue(is_array($arr["start"]));
    	$this->assertTrue(is_array($arr["end"]));
    	$this->assertEquals(8, $arr["start"]["hour"]);
    	$this->assertEquals(1, $arr["start"]["min"]);
    	$this->assertEquals(9, $arr["end"]["hour"]);
    	$this->assertEquals(0, $arr["end"]["min"]);
    }
}

